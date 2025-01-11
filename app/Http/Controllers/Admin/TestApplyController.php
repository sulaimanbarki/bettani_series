<?php

namespace App\Http\Controllers\Admin;

use App\Models\TestApply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Test;
use App\Models\TestQuestion;
use App\Models\TestTake;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp;

class TestApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test_id = $request->test_id;
        $test = Test::where('id', $request->test_id)->first();
        $request->amount = $test->price;


        $check_already = TestApply::where('test_id', $test_id)->where('cnic', $request->cnic)->first();

        if ($check_already) {
            $request->validate([
                'cnic' => 'required|unique:test_applies,cnic,' . $test_id,
            ], [
                'cnic.unique' => 'You have already applied for this test.',
            ]);
        }

        // $user = User::where('cnic', $request->cnic)->orWhere('email', $request->email)->orwhere('phone', $request->phone)->first();
        $pass = rand(100000, 999999);
        // if ($user) {
        //     $user_id = $user->id;
        // } else {
        //     $user = new User();
        //     $user->name = $request->name;
        //     $user->cnic = $request->cnic;
        //     $user->phone = $request->phone;
        //     $user->email = $request->email;
        //     $user->password = Hash::make($pass);
        //     $user->save();
        //     $user_id = $user->id;
        // }

        $testApply = new TestApply();
        $testApply->test_id = $request->test_id;
        $testApply->user_id = 1;
        $testApply->date = date('Y-m-d');
        $testApply->test_code = rand(100000, 999999);
        $testApply->name = $request->name;
        $testApply->fname = $request->fname;
        $testApply->phone = $request->phone;
        $testApply->gender = $request->gender;
        $testApply->cnic = $request->cnic;
        $testApply->zone = $request->zone;
        $testApply->province = $request->province;
        $testApply->district = $request->district;
        $testApply->higher_qualification = $request->qualification;

        $testApply->password_value = $pass;
        $testApply->test_password = Hash::make($pass);

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/test_apply/', $filename);
            $testApply->picture = $filename;
        }

        if ($test->ispaid) {
            $api = generateToken($request);
    
            if ($api->pp_ResponseCode == '124') {
                $testApply->detail = json_encode($api);
                $testApply->transaction_id = $api->pp_TxnRefNo;
            } else {
                return redirect()->back()->with('error', 'Test Apply Failed');
            }
        }


        if ($testApply->save()) {
            $data = $testApply;
            // return view('front.orderhds.jazzcash', compact('data'));
            // $code = base64_decode($testApply->id);
            // $url = 'testapplies/printOurSlip?application=' . $code;
            return redirect()->back()->with('success', 'You have successfully applied for the test, you can download your slip by clicking on the Download Slip button.');
        } else {
            return redirect()->back()->with('error', 'Test Apply Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestApply  $testApply
     * @return \Illuminate\Http\Response
     */
    public function show(TestApply $testApply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestApply  $testApply
     * @return \Illuminate\Http\Response
     */
    public function edit(TestApply $testApply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestApply  $testApply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestApply $testApply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestApply  $testApply
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestApply $testApply)
    {
        //
    }


    // apply 
    public function print(Request $request)
    {
        // check if test is applied or not
        $testApply = TestApply::where('test_id', $request->test_id)->where('cnic', $request->cnic)->first();
        if ($testApply) {
            return 'success';
        } else {
            return 'failuer';
        }
    }

    // printOurSlip
    public function printOurSlip(Request $request)
    {


        if ($request->has('application')) {
            $student = TestApply::where('id', base64_decode($request->application))->first();
        } else {
            $student = TestApply::where('test_id', $request->test_id)->where('cnic', $request->cnic)->first();
        }


        if ($student->payment_status != 1) {

            $verify = verfiyTransaction($student->transaction_id);
            if ($verify->pp_PaymentResponseCode == '000' || $verify->pp_PaymentResponseCode == '121') {
                $student->detail = json_decode($verify);
                $student->payment_status = 1;
                $student->save();
            }
        }


        $test = Test::find($request->test_id);

        $user_email = User::where('id', $student->user_id)->first()->email;
        if ($student) {
            $password = $student->test_password;
            return view('front.pages.printOurSlip', compact('student', 'user_email', 'test'));
        } else {
            return redirect()->back()->with('error', 'Test Not Applied');
        }
    }

    public function checkUserCredentials(Request $request)
    {
        $test_id = $request->test_id;
        $test_code = $request->test_code;
        $password = $request->test_password;
        // test_code = cnic
        $student = TestApply::where('test_id', $test_id)->where('cnic', $test_code)->where('test_taken', 0)->first();
        $test = Test::where('enabled', 1)->find($test_id);

        // if test is already taken then return false
        $test_taken = TestTake::where('test_id', $test_id)->where('cnic', $test_code)->where("is_completed", 1)->first();

        if ($test_taken) {
            return 'taken';
            exit;
        }

        if (!$test) {
            return false;
        }
        if ($student) {
            if ($student->payment_status == 1 or $test->ispaid == 0) {
            } else {
                echo 'payment';
                return;
                exit;
            }
            if (Hash::check($password, $student->test_password)) {
                echo 'success';
                return;
            } else {
                echo 'failuer';
                return;
            }
        } else {
            echo 'Invalid';
            return;
        }
    }

    // test_take
    public function test_take(Request $request)
    {
        $test_id = $request->test_id;
        $test_code = $request->test_code;
        $password = $request->test_password;
        $student = TestApply::where('test_id', $test_id)->where('cnic', $test_code)->where('test_taken', 0)->first();

        $test = Test::where('enabled', 1)->find($test_id);

        if ($student->payment_status != 1 && $test->ispaid == 1) {

            $verify = $this->verfiyTransaction($student->transaction_id);
            if ($verify->pp_PaymentResponseCode == '000' || $verify->pp_PaymentResponseCode == '121') {
                $student->detail = json_decode($verify);
                $student->payment_status = 1;
                $student->save();
            }
        }

        $test_taken = TestTake::where('test_id', $test_id)->where('cnic', $test_code)->where("is_completed", 1)->first();

        if (!$test || !$student || $test_taken) {
            abort(404);
        }

        if ($student) {
            if ($student->payment_status == 1 or $test->ispaid == 0) {
            } else {
                return redirect()->back()->with('error', 'Payment Not Done');
            }
            if (Hash::check($password, $student->test_password)) {

                // if test is already taken then do not create new test take
                $test_taken = TestTake::where('test_id', $test_id)->where('cnic', $test_code)->first();

                if (!$test_taken) {
                    $test_take = TestTake::create([
                        'test_id' => $test_id,
                        'test_apply_id' => $student->id,
                        'cnic' => $student->cnic,
                        'startingtime' => date('Y-m-d H:i:s'),
                        'endingtime' => date('Y-m-d H:i:s', strtotime('+1 hour +40 minutes')),
                    ]);
    
                    $questions = Question::where('test_id', $test_id)->get();
                    foreach ($questions as $question) {
                        TestQuestion::create([
                            'test_id' => $test_id,
                            'question_id' => $question->id,
                            'test_take_id' => $test_take->id,
                        ]);
                    }                    
                } else {
                    $test_take = $test_taken;

                    $questions = Question::where('test_id', $test_id)->get();
                }

                
                
                
                $question = TestQuestion::where('test_id', $test_id)->where('test_take_id', $test_take->id)->first()->question_id;

                $question = Question::where('id', $question)->first();

                $test = Test::find($test_id);
                $test_take_id = $test_take->id;

                return view('front.pages.testTake', compact('question', 'test', 'questions', 'test_take_id', 'test_take'));
            } else {
                return redirect()->back()->with('error', 'Invalid Password');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid Test Code');
        }
    }
}

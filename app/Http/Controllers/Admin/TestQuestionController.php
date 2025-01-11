<?php

namespace App\Http\Controllers\Admin;

use App\Models\Quiz;
use App\Models\Test;
use App\Models\Unit;
use App\Models\User;
use App\Models\Section;
use App\Models\Province;
use App\Models\Question;
use App\Models\TestTake;
use App\Models\TestApply;
use App\Models\QuizQuestion;
use App\Models\TestQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TestQuestionController extends Controller
{

    public function resultDetails($id)
    {
        $id = base64_decode($id);
        $test = Test::find($id);
        $provinces = Province::all();

        // login user test result


        return view('front.pages.test-result-detail', compact('test', 'provinces'));
    }

    public function test_result(Request $request)
    {
        // if previous route is 'test', then redirect to test_result route
        $last_section_of_url = substr(url()->previous(), strrpos(url()->previous(), '/') + 1);
        if ($last_section_of_url == 'test') {
            $test = TestTake::where('test_id', $request->test_id)->where('cnic', $request->cnic)->first();
            $user = User::where('cnic', $request->cnic)->first();
            $oldTest = Test::find($test->test_id);
            $test_apply = TestApply::where('test_id', $test->test_id)->where('cnic', $request->cnic)->first();

            return view('front.pages.test_result', compact('test', 'user', 'oldTest', 'test_apply'));
        }

        $test = TestTake::where('test_id', $request->test_id)->where('id', $request->test_take_id)->first();
        $user = User::where('cnic', $request->cnic)->first();
        $oldTest = Test::find($test->test_id);

        $test_questions = TestQuestion::where('test_id', $request->test_id)->where('test_take_id', $request->test_take_id)->get();
        $correct_answers = 0;
        foreach ($test_questions as $question) {
            $qstn = Question::find($question->question_id);
            if ($qstn->answer == $question->result) {
                $correct_answers++;
            }
        }
        $test->marks = $correct_answers;
        $test->is_completed = 1;
        $test->save();

        if (!$oldTest->instant_result) {
            // redirect to 'test' route
            return redirect()->route('test');
        }

        return view('front.pages.test_result', compact('test', 'user', 'oldTest'));
    }

    // check_result
    public function check_result(Request $request)
    {
        $test = TestTake::where('test_id', $request->test_id)->where('cnic', $request->cnic)->first();

        if (!$test) {
            return redirect()->back()->with('error', 'Test not found');
        } else {
            return 'success';
        }
    }

    public function test_result_overall(Request $request, $id)
    {
        $id = base64_decode($id);
        $test = Test::find($id);
        $provinces = Province::all();

        // login user test result


        return view('front.pages.test-result-detail', compact('test', 'provinces'));
    }

    // result_filter
    public function result_filter(Request $request)
    {
        $data = DB::table('tests')
            ->join('test_applies', 'tests.id', '=', 'test_applies.test_id')
            ->select('test_applies.name', 'test_applies.fname', 'test_applies.user_id', 'test_applies.cnic')
            ->where('tests.id', $request->test_id)
            ->when($request->province, function ($query) use ($request) {
                return $query->where('test_applies.province', $request->province);
                // ->where('tests.province_result', 1);
            })
            ->when($request->district, function ($query) use ($request) {
                return $query->where('test_applies.district', $request->district);
                // ->where('tests.district_result', 1);
            })
            ->when($request->zone, function ($query) use ($request) {
                return $query->where('test_applies.zone', $request->zone);
                // ->where('tests.zone_result', 1);
            })
            ->when($request->gender, function ($query) use ($request) {
                return $query->where('test_applies.gender', $request->gender);
            })
            ->get()->toArray();


        // foreach data item in data array select marks from test_takes table based on cnic
        foreach ($data as $key => $value) {
            $marks = TestTake::where('test_id', $request->test_id)->where('cnic', $value->cnic)->first();
            if ($marks) {
                $data[$key]->marks = $marks->marks;
            } else {
                $data[$key]->marks = 0;
            }

            // add SNo
            // $data[$key]->sno = $key + 1;
        }

        // sort data array based on marks in descending order  
        usort($data, function ($a, $b) {
            return $b->marks <=> $a->marks;
        });

        // add SNo
        foreach ($data as $key => $value) {
            $data[$key]->sno = $key + 1;
        }


        return response()->json($data);
    }


    public function switchQuestion(Request $request)
    {
        $question_id = $request->question_id;
        $test_id = $request->test_id;

        $is_finished = Test::where('id', $test_id)->where('is_finished', 1)->first();

        if ($is_finished) {
            return response()->json(['status' => 'success', 'message' => 'finished']);
        }
        $test_take_id = $request->test_take_id;

        $question_query = TestQuestion::query();
        $question_query->where('test_id', $test_id)->where('test_take_id', $test_take_id);


        $question = $question_query->clone()->where('question_id', $question_id)->first();

        $activeSwitcher = $question_query->clone()->where('question_id', $request->activeSwitcher)->first()->result;
        $next_question = Question::where('id', $question_id)->first();
        if (!$next_question) {
            return response()->json(['status' => 'error', 'message' => 'No more questions']);
        }
        $data = [
            'question' => $next_question->description,
            'test_id' => $test_id,
            'question_id' => $question_id,
            'quiz_question_id' => $question->id,
            'answer' => $question->result,
            'nth_question' => $question_query->where('id', '<', $question->id)->count() + 1,
            'activeSwitcher' => $activeSwitcher,
        ];
        return response()->json($data);
    }
    
    // old switcher
    // public function switchQuestion(Request $request)
    // {
    //     $question_id = $request->question_id;
    //     $test_id = $request->test_id;

    //     $is_finished = Test::where('id', $request->test_id)->where('is_finished', 1)->first();

    //     if ($is_finished) {
    //         return response()->json(['status' => 'success', 'message' => 'finished']);
    //     }

    //     $test_take_id = $request->test_take_id;
    //     $question = TestQuestion::where('test_id', $request->test_id)
    //         ->where('question_id', $request->question_id)
    //         ->where('test_take_id', $request->test_take_id)
    //         ->first();
    //     $activeSwitcher = TestQuestion::where('test_id', $request->test_id)
    //         ->where('question_id', $request->activeSwitcher)
    //         ->where('test_take_id', $request->test_take_id)
    //         ->first()->result;
    //     $next_question = Question::where('id', $request->question_id)->first();
    //     if (!$next_question) {
    //         return response()->json(['status' => 'error', 'message' => 'No more questions']);
    //     }
    //     $data = [
    //         'question' => Question::find($question_id)->description,
    //         'test_id' => $test_id,
    //         'question_id' => $question_id,
    //         'quiz_question_id' => $question->id,
    //         'answer' => TestQuestion::where('test_id', $test_id)->where('question_id', $question_id)->where('test_take_id', $request->test_take_id)->first()->result,
    //         'nth_question' => TestQuestion::where('test_id', $test_id)->where('id', '<', $question->id)->where('test_take_id', $request->test_take_id)->count() + 1,
    //         'activeSwitcher' => $activeSwitcher,
    //     ];
    //     return response()->json($data);
    // }
    public function createQuiz(Request $request)
    {
        $section_quiz = $request->section_quiz;
        $num_of_questions = $request->input('quiz_numbers');
        $unit_id = $request->input('unit_id');
        $section_id = $request->input('section_id');
        // random questions where unit_id = $unit_id
        if ($request->section_quiz) {
            $units = Unit::where('section_id', $section_id)->get();
            $questions = collect();

            for ($i = 1; $i <= $num_of_questions; $i++) {
                // select random unit from $units
                $random_unit = $units->random();
                $random_question = Question::where('unit_id', $random_unit->id)->inRandomOrder()->first();
                $questions[] = $random_question;
            }
            $unit_id = 0;
        } else {
            $questions = Question::where('unit_id', $unit_id)->inRandomOrder()->take($num_of_questions)->get();
        }
        $questions_count = $questions->count();
        date_default_timezone_set('Asia/Karachi');
        $quiz = Quiz::create([
            'title' => $request->has('section_quiz') ? Section::find($section_id)->title : Unit::find($unit_id)->title,
            'user_id' => Auth::user()->id,
            'marks' => 0,
            'startingtime' => date('Y-m-d H:i:s'),
            'endingtime' => date('Y-m-d H:i:s', strtotime('+' . $questions_count . ' minutes')),
            'type' => 2,
            'quiz_in_unit' => $unit_id,
            'quiz_in_section' => $section_quiz ? $section_id : 0,
            'district' => "Peshawar",
            'result' => 0,
        ]);

        foreach ($questions as $question) {
            QuizQuestion::create([
                'test_id' => $quiz->id,
                'question_id' => $question->id,
                'result' => null,
                'user_id' => Auth::User()->id
            ]);
        }
        $question = QuizQuestion::where('test_id', $quiz->id)->get();
        $data = $question->transform(function ($item, $key) {
            $item->quiz_title = Quiz::where('id', $item->test_id)->first()->title;
            $item->question_count = QuizQuestion::where('test_id', $item->test_id)->count();
            $item->question = Question::find($item->question_id)->description;
            $item->startingtime = Quiz::where('id', $item->test_id)->first()->startingtime;
            return $item;
        });
        return view('front.pages.quiz', compact('data'));
    }
    
    public function get_question(Request $request)
    {
        $test_id = $request->input('test_id');
        $question_id = $request->input('question_id');
        $answer = $request->input('answer');
        $type = $request->input('type');
        $test_take_id = $request->test_take_id;

        $test_query = TestQuestion::query();
        $test_query->where('test_id', $test_id)->where('test_take_id', $test_take_id);

        if ($answer) {
            TestQuestion::where('test_id', $test_id)->where('question_id', $question_id)
                ->where('test_take_id', $test_take_id)->update(['result' => $answer]);

            $update = $test_query->clone()->where('question_id', $question_id)->update(['result' => $answer]);
        }
        if ($type == 'next') {
            $question = $test_query->clone()->where('question_id', $question_id)->first();
            if ($question) {
                $question_id = $question->question_id;
            } else {
                $question_id = 0;
            }
            $question = $test_query->clone()->where('id', '>', $question->id)->first();
            if ($question) {
                $question_id = $question->question_id;
            } else {
                $question_id = 0;
            }
            // dd($question->id);
        } else if ($type == 'prev') {
            $question = $test_query->clone()->where('question_id', $question_id)->first();
            if ($question) {
                $question_id = $question->question_id;
            } else {
                $question_id = 0;
            }
            $question = $test_query->clone()->where('id', '<', $question->id)->orderBy('id', 'desc')->first();
            if ($question) {
                $question_id = $question->question_id;
            } else {
                $question_id = 0;
            }
        } else {
            $question = $test_query->clone()->where('question_id', $question_id)->first();
            if ($question) {
                $question_id = $question->question_id;
            } else {
                $question_id = 0;
            }
        }
        $next_question = Question::find($question_id);
        // dd($next_question);
        if (!$next_question) {
            return response()->json(['status' => 'error', 'message' => 'No more questions']);
        }
        $data = [
            'question' => Question::find($question_id)->description,
            'test_id' => $test_id,
            'question_id' => $question_id,
            'quiz_question_id' => $question->id,
            'answer' => $question->result,
            'nth_question' => $test_query->clone()->where('id', '<', $question->id)->count() + 1,
        ];
        return response()->json($data);
    }
    
    // old
    // public function get_question(Request $request)
    // {
    //     $test_id = $request->input('test_id');
    //     $question_id = $request->input('question_id');
    //     $answer = $request->input('answer');
    //     $type = $request->input('type');
    //     $test_take_id = $request->test_take_id;

    //     if ($answer) {
    //         TestQuestion::where('test_id', $test_id)->where('question_id', $question_id)
    //             ->where('test_take_id', $test_take_id)->update(['result' => $answer]);
    //     }
    //     if ($type == 'next') {
    //         $question = TestQuestion::where('test_id', $test_id)->where('question_id', $question_id)->where('test_take_id', $test_take_id)->first();
    //         if ($question) {
    //             $question_id = $question->question_id;
    //         } else {
    //             $question_id = 0;
    //         }
    //         $question = TestQuestion::where('test_id', $test_id)->where('id', '>', $question->id)->where('test_take_id', $test_take_id)->first();
    //         if ($question) {
    //             $question_id = $question->question_id;
    //         } else {
    //             $question_id = 0;
    //         }
    //         // dd($question->id);
    //     } else if ($type == 'prev') {
    //         $question = TestQuestion::where('test_id', $test_id)->where('question_id', $question_id)->where('test_take_id', $test_take_id)->first();
    //         if ($question) {
    //             $question_id = $question->question_id;
    //         } else {
    //             $question_id = 0;
    //         }
    //         $question = TestQuestion::where('test_id', $test_id)->where('id', '<', $question->id)->orderBy('id', 'desc')->where('test_take_id', $test_take_id)->first();
    //         if ($question) {
    //             $question_id = $question->question_id;
    //         } else {
    //             $question_id = 0;
    //         }
    //     } else {
    //         $question = TestQuestion::where('test_id', $test_id)->where('question_id', $question_id)->where('test_take_id', $test_take_id)->first();
    //         if ($question) {
    //             $question_id = $question->question_id;
    //         } else {
    //             $question_id = 0;
    //         }
    //     }
    //     $next_question = Question::find($question_id);
    //     // dd($next_question);
    //     if (!$next_question) {
    //         return response()->json(['status' => 'error', 'message' => 'No more questions']);
    //     }
    //     $data = [
    //         'question' => Question::find($question_id)->description,
    //         'test_id' => $test_id,
    //         'question_id' => $question_id,
    //         'quiz_question_id' => $question->id,
    //         'answer' => TestQuestion::where('test_id', $test_id)->where('question_id', $question_id)->where('test_take_id', $test_take_id)->first()->result,
    //         'nth_question' => TestQuestion::where('test_id', $test_id)->where('id', '<', $question->id)->where('test_take_id', $test_take_id)->count() + 1,
    //     ];
    //     return response()->json($data);
    // }

    // wrong_questions, a function that will return the wrong questions of the quiz
    public function wrong_questions(Request $request)
    {
        $test_id = $request->input('test_id');
        $questions = TestQuestion::where('test_id', $test_id)->where('test_take_id', $request->test_take_id)->get();

        // for each questions, match the result in the question table and fetch only when the result is not equal to the result in the quiz question table
        $data = $questions->transform(function ($item, $key) use ($request) {
            $question = Question::find($item->question_id);

            if ($question){
                $item->question = $question->description;
                $item->result = $question->answer;
    
                $test_item_result = TestQuestion::where('test_id', $item->test_id)->where('question_id', $item->question_id)->where('test_take_id', $request->test_take_id)->first()->result;
    
                if ($item->result != $test_item_result) {
                    return $item;
                }
            }
        });
        // dd($data);
        return view('front.pages.wrong_questions_test', compact('data'));
    }

    // get_mcqs
    public function get_mcqs(Request $request)
    {
        $unit_id = $request->input('unit_id');
        $mcqs = Unit::where('id', $unit_id)->first()->mcqs;
        return response()->json(['mcqs' => $mcqs]);
    }
}

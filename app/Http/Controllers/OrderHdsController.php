<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderItem;
use App\Models\OrderHd;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Http;
use Prophecy\Doubler\Doubler;

class OrderHdsController extends Controller
{


    public function getToken(Request $request)
    {

        $token = "";
        $response = Http::withOptions(["verify" => false])->post('https://pakistan.paymob.com/api/auth/tokens', [
            'api_key' => 'ZXlKaGJHY2lPaUpJVXpVeE1pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SmpiR0Z6Y3lJNklrMWxjbU5vWVc1MElpd2ljSEp2Wm1sc1pWOXdheUk2TVRjNE5Td2libUZ0WlNJNkltbHVhWFJwWVd3aWZRLkNVUjZCUE1xUEZneFVrbXBNQ1IxLUlOaTk5dHdwMmsyMHJ1SDJwNEdsdjVXSzBSZ3FJbkFPeERYRVZUV1U0UGZ6WEhiU1BvODNpWUMtVjV1WWtDdWZn',
        ]);
        if ($response->status() == 201) {
            $response = $response->getBody()->getContents();
            $response = json_decode($response);
            $token = $response->token;
        }
        return $token;
    }



    public function checkout()
    {
        if (Auth::check()) {
            $where = ['user_id' => Auth::User()->id];
        } else {
            $where = ['session_id' => session()->getId()];
        }

        $items = OrderItem::where($where)->where('status', 0)->with('book')->get();
        return view('front.orderhds.checkout', compact('items'));
    }


    public function processOrder(Request $request)
    {

        if (Auth::check()) {
            $user_id = Auth::User()->id;
            $where = ['user_id' => Auth::User()->id];
        } else {
            $user_id = 0;
            $where = ['session_id' => session()->getId()];
        }

        $controller = new functionalController();
        $orderNo = $controller->generateRandomNo(5, 'order_hds', 'orderNo');

        $street_address = '';
        $city = '';
        $state = '';
        $address = explode(',', $request->address);
        if (count($address) > 0) {
            $street_address = $address[0];
            if (count($address) > 1) {
                $city = $address[1];
            }
            if (count($address) > 2) {
                $state = $address[2];
            }
        }


        $orderitem = OrderItem::where('user_id', Auth::User()->id)->whereNull('orderhd_id')->where('status', 0)->first();
        if ($orderitem->type == 'order') {
            $orderHdarr = array('orderNo' => $orderNo, 'user_id' => $user_id, 'session_id' => session()->getId(), 'name' => $request->name,  'status' => 1, 'email' => $request->billing_email, 'phoneno' => $request->billing_phone, 'address' => $street_address, 'company' => $request->company, 'zip' => $request->zip, 'city' => $city, 'state' => $state, 'note' => $request->order_comments, 'amount' => $request->total, 'payment_method' => $request->payment_method, 'type' => $orderitem->type, 'quantity' => $orderitem->quantity, 'model_id', $orderitem->model_id);
        } else {
            $request->billing_phone = Auth::User()->phone;
            $orderHdarr = array('orderNo' => $orderNo, 'user_id' => $user_id, 'session_id' => session()->getId(), 'name' => Auth::User()->name,  'status' => 1, 'email' => Auth::User()->email, 'phoneno' => Auth::User()->phone, 'address' => '', 'company' => '', 'zip' => '', 'city' => '', 'state' => '', 'note' => $request->order_comments, 'amount' => $request->total, 'payment_method' => $request->payment_method, 'type' => $orderitem->type, 'quantity' => $orderitem->quantity, 'model_id', $orderitem->model_id);
        }


        if ($request->payment_method == 'bacs') {
            $image = $controller->uploadImage($request->transaction_attachment, "transactions");
            $orderHdarr['transaction_no'] = $request->transaction_no;
            $orderHdarr['transaction_attachment'] = $image;
        }


        if ($request->payment_method == "jazzcash") {
            $request->amount = $request->total;
            $request->phoneno = $request->billing_phone;

            $response = generateToken($request);

            if ($response->pp_ResponseCode == '124') {
                $orderHdarr['detail'] = json_encode($response);
                $orderHdarr['transaction_no'] = $response->pp_TxnRefNo;
                $orderHdarr['status'] = 3;
            } else {

                Alert::toast('Fail To Generate JazzCash Token', 'fail')->position('center');;
                return redirect()->back();
            }
        }
        $check = Orderhd::where('user_id', Auth::User()->id)->with('items')->get();

        foreach ($check as $key => $value) {
            if ($value->items->first()?->model_id == $orderitem->model_id) {
                Alert::toast('You have already ordered this item', 'fail')->position('center');;
                return redirect()->back();
            }
        }

        $orderHD = Orderhd::Create($orderHdarr);
        if ($orderHD) {
            OrderItem::where($where)->where('status', 0)->update(['status' => 1, 'orderhd_id' => $orderHD->id]);
            Alert::toast('Your order has been successfully submitted. The order will be verify  within 24 hours.', 'success')->position('center');
            return redirect('order-details/' . $orderHD->orderNo);
        } else {
            Alert::toast('Cannot proccess Your Quote request Please try Again', 'fail')->position('center');;
            return redirect()->back();
        }
    }
}

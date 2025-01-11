<?php
// use GuzzleHttp;


function checkPayment($id)
{
    $orderhd = App\Models\OrderHd::where('id', $id)->first();
    if ($orderhd->payment_method == 'jazzcash' && $orderhd->status != 2) {
        $verify = verfiyTransaction($orderhd->transaction_no);
        if ($verify->pp_PaymentResponseCode == '000' || $verify->pp_PaymentResponseCode == '121') {
            $orderhd->detail = json_decode($verify);
            if ($orderhd->type = 'read') {
                $orderhd->status = 2;
            } else {
                $orderhd->status = 3;
            }

            $orderhd->save();
        }
    }
}
function verfiyTransaction($token)
{
    $environment = config('jazzcash.environment');
    $data = [
        'pp_MerchantID' => config("jazzcash.$environment.merchant_id"),
        'pp_Password' => config("jazzcash.$environment.password"),
        'pp_HashKey'           => config("jazzcash.$environment.integerity_salt"),
        'pp_TxnRefNo' => $token,
    ];
    ksort($data);
    $str = '';
    foreach ($data as $key => $value) {
        if (!empty($value) && $key !== 'pp_HashKey') {
            $str = $str . '&' . $value;
        }
    }
    $str = $data['pp_HashKey'] . $str;
    $data['pp_SecureHash'] = hash_hmac('sha256', $str, $data['pp_HashKey']);
    $client = new GuzzleHttp\Client(['verify' => false]);
    $url = config("jazzcash.$environment.endpoint") . 'PaymentInquiry/Inquire';
    try {
        $response = $client->request(
            'POST',
            $url,
            array(
                'headers' => ['Content-Type' => 'application/json'],
                'body' => json_encode($data),
            )
        );
        $response = $response->getBody()->getContents();
        return json_decode($response);
    } catch (GuzzleHttp\Exception\ClientException $e) {
        verfiyTransaction($token);
    }
}

function generateToken($request)
{
    $environment = config('jazzcash.environment');
    $data = [
        'pp_MerchantID'        => config("jazzcash.$environment.merchant_id"),
        'pp_Password'          => config("jazzcash.$environment.password"),
        'pp_ReturnURL'         => config("jazzcash.$environment.return_url"),
        'pp_HashKey'           => config("jazzcash.$environment.integerity_salt"),
        'pp_Amount'            => $request->amount,
        'pp_BillReference'     => 'billRef',
        'pp_SubMerchantID'     => '',
        'pp_Description'       => 'Thank you for using Jazz Cash',
        'pp_Language'          => 'EN',
        'pp_TxnCurrency'       => 'PKR',
        'pp_TxnDateTime'       => date('YmdHis'),
        'pp_TxnExpiryDateTime' => date('YmdHis', strtotime('+8 Days')),
        'pp_TxnRefNo'          => "T" . date('YmdHis'),
        'pp_TxnType'           => "OTC",
        'pp_Version'           => '1.1',
        'pp_DiscountedAmount'  => '',
        'pp_DiscountedBank'    => '',
        'pp_BankID'            => "",
        'pp_ProductID'         => "",
        'ppmpf_1'              =>  $request->phoneno,
        'ppmpf_2'              => '2',
        'ppmpf_3'              => '3',
        'ppmpf_4'              => '4',
        'ppmpf_5'              => '5',
    ];

    ksort($data);


    $str = '';
    foreach ($data as $key => $value) {
        if (!empty($value) && $key !== 'pp_HashKey') {
            $str = $str . '&' . $value;
        }
    }
    $str = $data['pp_HashKey'] . $str;
    $data['pp_SecureHash'] = hash_hmac('sha256', $str, $data['pp_HashKey']);
    $client = new GuzzleHttp\Client(['verify' => false]);
    $url = config("jazzcash.$environment.endpoint") . 'Payment/DoTransaction';
    try {
        $response = $client->request(
            'POST',
            $url,
            array(
                'headers' => ['Content-Type' => 'application/json'],
                'body' => json_encode($data),
            )
        );
        $response = $response->getBody()->getContents();
        return json_decode($response);
    } catch (GuzzleHttp\Exception\ClientException $e) {
        generateToken($request);
    }
}

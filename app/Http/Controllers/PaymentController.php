<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\Gateway as Gateway;

class PaymentController extends Controller
{
    public function index(Gateway $gateway)
    {
        $token = $gateway->ClientToken()->generate();

        $data =[
            'token' => $token,
        ];

        return view('payment-page', $data);
    }

    public function checkout(Gateway $gateway, Request $request)
    {
        $amount = $request->amount;
        $nonce = $request->payment_method_nonce;
 
        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);
 
        if ($result->success) {
 
            $transaction = $result->transaction;
            return back()->with('success_message', 'Transaction Successful. Transaction ID:' . $transaction->id);
 
        } else {
            $errorString = "";
 
            foreach  ($result->errors->deepAll() as $error) {
                $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
            }
 
            return back()->withErrors('An error occurred with the message:  ' . $result->message);
        }

    }

}

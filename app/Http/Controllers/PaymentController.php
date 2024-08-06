<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('payment.form');
    }

    public function processPayment(Request $request)
    {
        // Validate the payment form input
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'order_id' => 'required|string',
        ]);

        // Retrieve CMI credentials from .env
        $merchantId = env('CMI_MERCHANT_ID');
        $accessCode = env('CMI_ACCESS_CODE');
        $secureSecret = env('CMI_SECURE_SECRET');
        $paymentUrl = env('CMI_PAYMENT_URL');

        $amount = $request->input('amount');
        $orderId = $request->input('order_id');

        // Generate secure hash
        $hashString = "amount=$amount&order_id=$orderId&merchant_id=$merchantId&access_code=$accessCode";
        $secureHash = hash_hmac('sha256', $hashString, $secureSecret);

        // Redirect to CMI payment gateway
        return redirect()->away("$paymentUrl?amount=$amount&order_id=$orderId&merchant_id=$merchantId&access_code=$accessCode&secure_hash=$secureHash");
    }
}

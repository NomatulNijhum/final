<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe;
//use\price;
class StripePaymentController extends Controller
{



  public function stripe()
{
    return view('Dashboard.Payment.stripe');
}

public function stripePost(Request $request)
    {




        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * $request->total_price,
                "currency" => "BDT",
                "source" => $request->stripeToken,
                "description" => "Test payment from "
        ]);

        return redirect('/dashboard');


        //Session::flash('success', 'Payment successful!');

        //return back();
    }
}

<?php

namespace App\Http\Controllers;
use Stripe\Stripe;
use Stripe\Charge;
use Cart;
use Session;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
   public function index()
   {
       return view('checkout');

   }
   public function pay()
   {
     

      Stripe::setApiKey("sk_test_f2kt0dmipC3Mgf2a6uhDMX5o00eU6CONrP");

      $charge = Charge::create([

        'amount' => Cart::total() * 100,
        'currency'  => 'usd',
        'description'  => 'selling fruits',
        'source'  => request()->stripeToken
      ]);
     // toastr()->success('votre slideBare a Modifier avec succes!');
      dd('ok');
   }
}

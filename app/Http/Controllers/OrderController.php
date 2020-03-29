<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    /**
     * create a new Order
     */
    public function create()
    {
       // return view('categories.create');
    }
    /**
     * store a the order
     */
    public function store(Request $request)
    {          
        Order::create([  
                'name'=> $request->name,
                'tel'=> $request->tel,
                'adress'=> $request->adress,
                'total_payment'=> $request->total_payment
                ]);
        toastr()->success('votre commande a passer avec succes!');
        return redirect(route('index'));
    }

}

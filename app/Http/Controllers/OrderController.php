<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use DB;

class OrderController extends Controller
{
    
    public function index()
    {
       return view('orders.index')->with('orders', Order::latest()->get());
                                             
    }
    
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
                'qty'=> $request->qty,
                'total_payment'=> $request->total_payment
                ]);
        toastr()->success('votre commande a passer avec succes!');
        return redirect(route('index'));
    }

    public function makeAdmin(Order $order)
    {
        $order->valid = 'valid';

        $order->save();

        toastr()->success('Order valid maintenant!');

        return redirect(route('orders.index'));
    }

}

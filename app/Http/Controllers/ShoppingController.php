<?php

namespace App\Http\Controllers;
use App\Post;
use Cart;


use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function cartAdd()
    {
          
            $pdt = Post::find(request()->pdt_id);

            $cartItem = Cart::add([

                'id'    => $pdt->id,
                'name'  => $pdt->name,
                'qty'   => request()->qty,
                'price' => $pdt->price
            ]);

            Cart::associate($cartItem->rowId, 'App\Post');
            

      return redirect()->route('cart');

    }
    public function cart()
    {
      // Cart::destroy();
        return view('cart');
    }
    

    //delete for one Row cart
    public function cartDelete($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }

//increment of quantity of product cart
    public function incr($id ,$qty)
    {
       Cart::update($id , $qty + 1);
        return redirect()->back();
    }

//decrement of quantity of product cart
    public function decr($id ,$qty)
    {
        Cart::update($id , $qty - 1);
        return redirect()->back();
    }
    
    public function addRapid($id)
    {
          
            $pdt = Post::find($id);

            $cartItem = Cart::add([

                'id'    => $pdt->id,
                'name'  => $pdt->name,
                'qty'   => 1 ,
                'price' => $pdt->price
            ]);

            Cart::associate($cartItem->rowId, 'App\Post');
            

      return redirect()->route('cart');

    }
}

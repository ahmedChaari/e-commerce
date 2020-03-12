<?php

namespace App\Http\Controllers;
use App\Post;
use App\Header;
use App\Footer;
use App\Head;

use Illuminate\Http\Request;

class FrontEndControler extends Controller
{
   public function index()
   {
      $items = array(4);
    return view('index', ['posts' => Post::paginate(9)])
                         ->with('headers',Header::all())
                         ->with('footers',Footer::all())
                         ->with('heads',Head::all())
                         ->with('items' , Post::orderby('id','desc')->get())
                         ->with('item_actives' , Post::orderby('id','asc')->get())
                         ->with(['specials' => Post::where('price_promo' , '>' , 0)->paginate(6)]);
   }
   public function single($id)
   {
      return view('single', ['post' => Post::find($id)]);
   }

   public function cartShow($id)
   {
      return view('cartShow', ['product' => Post::find($id)]);
   }
}

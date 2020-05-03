<?php

namespace App\Http\Controllers;
use App\Post;
use App\Header;
use App\Footer;
use App\Head;
use App\Category;

use Illuminate\Http\Request;

class FrontEndControler extends Controller
{
   public function index()
   {
      

      $items = array(4);
    return view('index', ['posts' => Post::paginate(9)])
                         ->with('categories',Category::all())
                         ->with('headers',Header::all())
                         ->with('items' , Post::orderby('id','desc')->get())
                         ->with('item_actives' , Post::orderby('id','asc')->get())
                         ->with(['specials' => Post::where('price_promo' , '>' , 0)->paginate(6)])
                         ->with(['bests' => Post::where('price_promo' , '>' , 0)->orderBy('created_at', 'desc')->take(2)->get()]);
   }
   public function single(Post $post)
   {
      return view('single')->with('post',$post)->with('categories',Category::all());
     
   }

   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Head;
use App\Footer;
use Session;
use App\Http\Requests\posts\createPostRequest;
use App\Http\Requests\posts\updatePostRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class PostsController extends Controller
{

    

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index')->with('posts',Post::all());
    }

    public function getlist()
    {
        return view('posts.getlist')->with('posts',Post::all());
                                 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('categories', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createPostRequest $request)
    {
        $image = $request->image->store('posts');

        Post::create([  
            'name'       => $request->name,
            'content'     => $request->content,
            'description' => str_slug($request->name),
            'image'       => $image,
            'price' => $request->price,
            'price_promo' => $request->price_promo,
            'published_at' => $request->published_at,
            'category_id' => $request->category,
            
            ]);
    toastr()->success('votre post a ajouter avec succes!');
    return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
       
        return view('posts.show')->with('post',$post)
                                 ->with('specials', $post);
                                    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
       return view('posts.create')->with('post', $post)->with('categories', Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updatePostRequest $request, Post $post)
    {
        $data = $request->only(['name','description','content','published_at','category','price','price_promo']);

        //check if image

        if($request->hasFile('image')){
                //uplaod image
            $image = $request->image->store('posts');
                //delete image
           $post->deleteImage();

            $data['image'] = $image;
        }
                //update image
        $post->update($data);

        toastr()->success('votre post a Modifier avec succes!');
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::withTrashed()->where('id', $id)->firstOrFail();

        if($post->trashed()) {
            $post->deleteImage();
            $post->forceDelete();
            toastr()->error('votre post ?? mettre dans le supprimer avec succ??s!');
        }
        else {
            $post->delete();
            toastr()->warning('votre post ?? mettre dans le corbeille avec succ??s!');
        }

       return redirect(route('posts.index'));

        }

    public function trashed(){

            $trashed = Post::onlyTrashed()->get();
            return view('posts.index')->with('posts', $trashed);
        }
    public function restore($id)
        {
                $post = Post::withTrashed()->where('id', $id)->firstOrFail();
                $post->restore();
                toastr()->warning('votre post ?? restore avec succ??s!');

                return redirect()->back();
        }

    public function search(Request $request)
         {
        $search = Input::get ( 'search' );
        $posts   = Post::where('name','LIKE', "%$search%")->get();

        if (count ( $posts ) > 0)
            return view ( 'layouts.search' )->with(compact('posts'));
        else
            return view ( 'layouts.search' )->withMessage ( 'Produit introuvable ,Chercher de trouver autre produit..' );
        }

}

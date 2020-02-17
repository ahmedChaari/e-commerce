<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Session;
use App\Http\Requests\posts\createPostRequest;
use App\Http\Requests\posts\updatePostRequest;
use Illuminate\Support\Facades\Storage;

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
            'description' => $request->description,
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
    public function show($id)
    {
        return view('cartShow', ['post' => Post::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
       return view('posts.create')->with('post',$post)->with('categories', Category::all());
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
            toastr()->error('votre post à mettre dans le supprimer avec succès!');
        }
        else {
            $post->delete();
            toastr()->warning('votre post à mettre dans le corbeille avec succès!');
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
                toastr()->warning('votre post à restore avec succès!');

                return redirect()->back();
        }
}

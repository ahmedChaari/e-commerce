<?php

namespace App\Http\Controllers;
use Session;
use App\Head;
use Illuminate\Http\Request;
use App\Http\Requests\heads\UpdateHeadRequest;
use Illuminate\Support\Facades\Storage;

class HeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('heads.index')->with('heads',Head::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Head  $head
     * @return \Illuminate\Http\Response
     */
    public function show(Head $head)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Head  $head
     * @return \Illuminate\Http\Response
     */
    public function edit(Head $head)
    {
       
       return view('heads.edit')->with('head',$head);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Head  $head
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHeadRequest $request, Head $head)
    {
        $data = $request->only(['tel','email','adress','image']);

        //check if image

        if($request->hasFile('image')){
                //uplaod image
            $image = $request->image->store('heads');
                //delete image
           $head->deleteImage();

            $data['image'] = $image;
        }
                //update image
        $head->update($data);

        toastr()->success('votre Modification à passer avec succes!');
        return redirect(route('heads.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Head  $head
     * @return \Illuminate\Http\Response
     */
    public function destroy(Head $head)
    {
        //
    }
    public function head()
    {  
        return view('/header')->with('heads',Head::all());

    }


}

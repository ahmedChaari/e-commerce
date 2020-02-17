<?php

namespace App\Http\Controllers;
use App\header;
use Session;
use App\Http\Requests\headers\createHeaderRequest;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class HeadersController extends Controller
{
    public function index()
    {
        return view('headers.index')->with('headers',Header::all());
    }
    public function create()
    {
        return view('headers.create');
    }
    public function store(request $request)
    {
        $image = $request->image->store('headers');

        Header::create([  
            'title'       => $request->title,
            'description' => $request->description,
            'image'       => $image, 
            ]);
    toastr()->success('votre slide a ajouter avec succes!');
    return redirect(route('headers.index'));
    }


    public function edit(Header $header)
    {
       return view('headers.create')->with('header',$header);
    }

    public function update(request $request, Header $header)
    {
        $data = $request->only(['title','description']);

        //check if image

        if($request->hasFile('image')){
                //uplaod image
            $image = $request->image->store('headers');
                //delete image
           $header->deleteImage();

            $data['image'] = $image;
        }
                //update image
        $header->update($data);

    toastr()->success('votre slideBare a Modifier avec succes!');
    return redirect(route('headers.index'));
    }

    public function destroy(Header $header)
    {
        $header->delete();

        toastr()->error('Votre slideBare a été Supprimé avec succès!', 'Inconcevable!');
        return redirect(route('headers.index'));

    }

    
    public function slide()
    {
       
        return view('/header')->with('headers',Header::all());

    }


}

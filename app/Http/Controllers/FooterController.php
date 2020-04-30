<?php

namespace App\Http\Controllers;

use App\Footer;
use Illuminate\Http\Request;

use Session;
use App\Http\Requests\footers\EditFooterRequest;
use Illuminate\Support\Facades\Storage;

class FooterController extends Controller
{
   
    public function index()
    {
        return view('footers.index')->with('footers',Footer::all());
    }

    public function list()
    {
        $lists=[];
        return view('footers.list')->with('lists', Footer::all());  
    }

    public function edit(Footer $footer)
    {
        return view('footers.edit')->with('footer',$footer);
    }
    public function update(EditFooterRequest $request, Footer $footer)
    {
        $data = $request->only(['tel','email','adress','copyright',
        'url_face','url_inst','url_google','url_twiter','url_pinter','image']);

        //check if image

        if($request->hasFile('image')){
                //uplaod image
            $image = $request->image->store('footers');
                //delete image
           $footer->deleteImage();

            $data['image'] = $image;
        }
                //update image
        $footer->update($data);

        toastr()->success('votre Modification à passer avec succes!');
        return redirect(route('footers.index'));
    }

     
   

}

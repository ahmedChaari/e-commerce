<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Footer extends Model
{
    protected $fillable =['tel','email','adress','copyright',
    'url_face','url_inst','url_google','url_twiter','url_pinter','image'];

    public function deleteImage()
    {

        Storage::delete($this->image);
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Header extends Model
{
    protected $fillable =['title','description','image'];
    
    public function deleteImage()
        {

            Storage::delete($this->image);
        }
}

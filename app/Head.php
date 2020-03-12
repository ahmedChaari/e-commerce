<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Head extends Model
{
    protected $fillable =['tel','email','adress','image'];

    public function deleteImage()
    {

        Storage::delete($this->image);
    }

}

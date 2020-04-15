<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =['name','tel','adress','total_payment','valid','qty'];


    public  function isValid()
    {
        return $this->valid == 'no_valid';
    }

}

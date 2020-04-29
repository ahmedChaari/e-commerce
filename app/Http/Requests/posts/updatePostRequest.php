<?php

namespace App\Http\Requests\posts;

use Illuminate\Foundation\Http\FormRequest;

class updatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
          
            'content'=>'required',
            'price'=>'required',  
            'published_at'=>'required|date',
            'category'=>'required'
        ];
    }
}

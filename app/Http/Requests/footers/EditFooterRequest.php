<?php

namespace App\Http\Requests\footers;

use Illuminate\Foundation\Http\FormRequest;

class EditFooterRequest extends FormRequest
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
            'tel'        => 'nullable|string', 
            'email'      => 'nullable|string',
            'adress'     => 'nullable|string',
            'copyright'  => 'required|string',
            'url_face'   => 'nullable|string',
            'url_inst'   => 'nullable|string',
            'url_google' => 'nullable|string',
            'url_twiter' => 'nullable|string',
            'url_pinter' => 'nullable|string',
            
        ];
    }
}

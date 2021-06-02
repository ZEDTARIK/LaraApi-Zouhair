<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployee extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // make true 
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
            "FullName" => 'bail|required|min:5|max:60',
            "Email" => 'bail|required|email|max:50',
            "Adresse" => 'bail|required|max:100'
        ];
    }
}

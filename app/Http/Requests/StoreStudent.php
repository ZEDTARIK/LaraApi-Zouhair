<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
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
            'studentCode' => 'bail|required|max:50',
            'firstName' => 'bail|required|min:6|max:50',
            'lastName' => 'bail|required|min:6|max:50'
        ];
    }
}

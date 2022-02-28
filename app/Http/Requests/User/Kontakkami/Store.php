<?php

namespace App\Http\Requests\User\Kontakkami;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'subject'=>'required',
            'email'=>'required',
            'hp'=>'required|numeric|digits_between:11,12,13',
            'message'=>'required|min:10'
        ];
    }
}

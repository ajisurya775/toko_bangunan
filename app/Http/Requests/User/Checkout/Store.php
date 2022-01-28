<?php

namespace App\Http\Requests\User\Checkout;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'desa' => 'required',
            'alamat' => 'required|min:20',
            'hp' => 'required|numeric|digits_between:11,12,13',
            'gambar' => 'required|mimes:jpg,png,jfif,bmp,jpeg',
        ];
    }
}

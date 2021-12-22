<?php

namespace App\Http\Requests\Admin\Varian;

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
            'nama_varian'=>'required',
            'stok_varian'=>'required',
            'harga_varian'=>'required',
            'gambar_varian'=>'required'
        ];
    }
}

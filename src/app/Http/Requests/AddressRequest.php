<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            //
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png',
            'post_code' => "required|regex:/^\d{3}[-]\d{4}$/",
            'address' => 'required',
            'building' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'お名前を入力してください',
            'image.mimes:jpeg,png' => '拡張子は、.jpegもしくは.pngでアップロードしてください',
            'post_code.required' => '郵便番号を入力してください。',
            'post_code.regex' => '郵便番号の形式が正しくありません。',
            'address.required' => '住所を入力してください',
            'building.required' => '建物名を入力してください',
        ];
    }
}

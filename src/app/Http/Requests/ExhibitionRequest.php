<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExhibitionRequest extends FormRequest
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
            'description' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png',
            'category' => 'required',
            'condition' => 'required',
            'price' => 'required|numeric|min:0',
        ];
    }

    public function messages(){
        return [
            'name.required' => '名前を入力してください',
            'description.required' => '商品説明を入力してください',
            'description.max' => '商品説明は255文字までで記載してください',
            'image.required' => '商品画像のアップロードが必須です',
            'image.mimes:jpeg,png' => '拡張子は、.jpegもしくは.pngのみです',
            'category.required' => 'カテゴリーを入力してください',
            'condition.required' => '商品状況を入力してください',
            'price.required' => '商品価格を入力してください',
            'price.numeric' => '商品価格は数値で入力してください',
            'price.min' => '商品価格は0円以上で入力してください',
        ];
    }
}

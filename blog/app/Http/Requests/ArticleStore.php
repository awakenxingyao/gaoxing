<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $max = 1*1024*1024;// 1m
        return [
            //
            'subject' => 'required|min:4|max:255',
            'category_id' => 'required|exists:categories,id',
            'cover'=> 'image|max:'.$max,
        ];
    }

    /**
     * 字段属性
     * @return array
     */
    public function attributes()
    {
        return [
            'subject' => '文章标题',
            'category_id' => '所属分类',
            'cover' => '封面图像',
        ];
    }
}

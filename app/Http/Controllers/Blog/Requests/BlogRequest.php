<?php

namespace App\Http\Controllers\Blog\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255|min:5',
            'content' => 'required|string|max:2000|min:100',
            'user_id' => 'required',
            'category_id' => 'required',
            'is_approved' => 'required|in:true,false'
        ];
    }

    public function messages()
    {

    }
}

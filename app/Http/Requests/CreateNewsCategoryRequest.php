<?php

namespace App\Http\Requests;

class CreateNewsCategoryRequest extends NewsCategoryRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255|unique:news_categories',
            'description' => 'required',
            'category_thumbnail' => 'image',
        ];
    }
}

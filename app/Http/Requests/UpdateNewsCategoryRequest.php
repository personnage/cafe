<?php

namespace App\Http\Requests;

class UpdateNewsCategoryRequest extends NewsCategoryRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $category = $this->route('category');

        return [
            'name' => 'max:255|unique:news_categories,name,'.$category->id,
            'title' => 'required|max:255|unique:news_categories,title,'.$category->id,
            'description' => 'required',
            'category_thumbnail' => 'image',
        ];
    }
}

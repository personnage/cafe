<?php

namespace App\Http\Requests;

class NewsItemCreateRequest extends NewsItemRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category' => 'required|numeric|exists:news_categories,id',
            'title' => 'required|max:255|unique:news_items',
            'announcement' => 'required',
            'body' => 'required',
            'news_thumbnail' => 'image',
            'published_since' => 'required|date_format:Y-m-d H:i:s',
        ];
    }
}

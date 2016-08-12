<?php

namespace App\Http\Requests;

class NewsItemUpdateRequest extends NewsItemRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $news = $this->route('news');

        return [
            'category' => 'required|numeric|exists:news_categories,id',
            'name' => 'required|max:255|unique:news_items,name,'.$news->id,
            'title' => 'required|max:255|unique:news_items,title,'.$news->id,
            'announcement' => 'required',
            'body' => 'required',
            'news_thumbnail' => 'image',
            'published_since' => 'required|date_format:Y-m-d H:i:s',
        ];
    }
}

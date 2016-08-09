<?php

namespace App\Http\Requests;

class CreateNewsItemRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // admin or editor_role or create_new_post permission
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
            'name' => 'required|max:255|unique:news_items',
            'title' => 'required|max:255',
            'announcement' => 'required',
            'body' => 'required',
            'category' => 'required|numeric|exists:news_categories,id',
            'published_since' => 'required:date',
        ];
    }
}

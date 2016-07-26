<?php

namespace App\Http\Controllers;

use App\Models\ContentCategoryType;

class ContentController extends Controller
{
    public function newsCategoriesIndex()
    {
        $contentCategoryType = ContentCategoryType::where('name', 'news')->first();

        return view('app.content.type', [
            'typeTitle' => $contentCategoryType->title,
            'categories' => $contentCategoryType->categories()->orderBy('id')->get(),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;

class NewsController extends Controller
{
    public function categoriesList()
    {
        $categories = NewsCategory::whereNull('parent_id')
            ->whereNotNull('sort')
            ->orderBy('sort')
            ->get();

        return view('app.news.categories_list', [
            'categories' => $categories,
        ]);
    }

    public function itemsList($categoryName)
    {
        $currentCategory = NewsCategory::where('name', $categoryName)->firstOrFail();

        $items = $currentCategory->items()
            ->where('is_published', true)
            ->whereRaw('published_since <= CURRENT_TIMESTAMP')
            ->whereRaw('published_until >= CURRENT_TIMESTAMP')
            ->get();

        return view('app.news.items_list', [
            'categoryTitle' => $currentCategory->title,
            'items' => $items,
        ]);
    }
}

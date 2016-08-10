<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use App\Models\NewsItem;

class NewsController extends Controller
{
    public function categoriesList()
    {
        // TODO repository
        $categories = NewsCategory::roots()
            ->orderBy('id')
            ->get();

        return view('app.news.categories_list', compact('categories'));
    }

    public function itemsList(NewsCategory $newsCategory)
    {
        $items = $newsCategory->items;

        return view('app.news.items_list', compact('items') + [
            'categoryTitle' => $newsCategory->title,
        ]);
    }

    public function showNewsTotalItem($year, $month, $day, $itemName)
    {
        $item = NewsItem::where('name', $itemName)
            ->whereDate('published_since', '=', "{$year}-{$month}-{$day}")
            ->firstOrFail();

        return view('app.news.item', compact('item'));
    }

    public function showArticleItem($itemName)
    {
        dd($itemName);
    }

    private function showNewsItem(NewsItem $item)
    {

    }
}

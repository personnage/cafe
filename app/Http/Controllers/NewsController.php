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

        return view('app.news.categories_list', [
            'categories' => $categories,
        ]);
    }

    public function itemsList($categoryName)
    {
        $currentCategory = NewsCategory::where('name', $categoryName)->firstOrFail();

        $items = $currentCategory->items()
            ->whereRaw('published_since <= CURRENT_TIMESTAMP')
            ->whereRaw('published_until >= CURRENT_TIMESTAMP')
            ->get();

        return view('app.news.items_list', [
            'categoryTitle' => $currentCategory->title,
            'items' => $items,
        ]);
    }

    public function showNewsTotalItem($year, $month, $day, $itemName)
    {
        $item = NewsItem::where('name', $itemName)
            ->whereDate('published_since', '=', "{$year}-{$month}-{$day}")
            ->firstOrFail();

        dd($item);
    }

    public function showArticleItem($itemName)
    {
        dd($itemName);
    }

    private function showNewsItem(NewsItem $item)
    {

    }
}

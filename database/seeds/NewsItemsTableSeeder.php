<?php

use App\Models\NewsCategory;
use App\Models\User;
use App\Models\NewsItem;
use Illuminate\Database\Seeder;

class NewsItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryIds = NewsCategory::select('id')->get()->pluck('id');
        $userIds = User::select('id')->get()->pluck('id');

        foreach ($categoryIds as $categoryId) {
            $itemsCount = random_int(5, 15);

            factory(NewsItem::class, $itemsCount)->create([
                'news_category_id' => $categoryId,
                'user_id' => $userIds->random(),
            ]);
        }
    }
}

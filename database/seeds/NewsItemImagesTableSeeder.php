<?php

use App\Models\NewsItem;
use App\Models\NewsItemImage;
use Illuminate\Database\Seeder;

class NewsItemImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contentIds = NewsItem::select('id')->get()->pluck('id');
        $faker = \Faker\Factory::create();

        foreach ($contentIds as $contentId) {
            NewsItemImage::create([
                'name' => "{$faker->word}.jpg",
                'news_item_id' => $contentId,
            ]);
        }
    }
}

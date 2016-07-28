<?php

use App\Models\NewsCategory;
use App\Models\NewsCategoryImage;
use Illuminate\Database\Seeder;

class NewsCategoryImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = NewsCategory::all();

        foreach ($categories as $category) {
            $categoryId = $category->id;

            NewsCategoryImage::create([
                'name' => '100x100.jpg',
                'news_category_id' => $categoryId,
            ]);
        }
    }
}

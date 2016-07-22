<?php

use App\Models\ContentCategory;
use App\Models\ContentCategoryImage;
use Illuminate\Database\Seeder;

class ContentCategoryImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ContentCategory::all();

        $urlByType = [
            1 => '100x100.jpg',
            2 => '422x315.jpg',
        ];

        foreach ($categories as $category) {
            $categoryTypeId = $category->content_category_type_id;
            $categoryId = $category->id;

            ContentCategoryImage::create([
                'name' => $urlByType[$categoryTypeId] ?? '',
                'content_category_id' => $categoryId,
            ]);
        }
    }
}

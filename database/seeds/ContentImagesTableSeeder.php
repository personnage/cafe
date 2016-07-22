<?php

use App\Models\Content;
use App\Models\ContentImage;
use Illuminate\Database\Seeder;

class ContentImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contentIds = Content::select('id')->get()->pluck('id');
        $faker = \Faker\Factory::create();

        foreach ($contentIds as $contentId) {
            ContentImage::create([
                'name' => "{$faker->word}.jpg",
                'content_id' => $contentId,
            ]);
        }
    }
}

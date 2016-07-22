<?php

use App\Models\ContentCategory;
use App\Models\User;
use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryIds = ContentCategory::select('id')->get()->pluck('id');
        $userIds = User::select('id')->get()->pluck('id');

        foreach ($categoryIds as $categoryId) {
            $articlesCount = random_int(5, 15);

            factory(Content::class, $articlesCount)->create([
                'content_category_id' => $categoryId,
                'user_id' => $userIds->random(),
            ]);
        }
    }
}

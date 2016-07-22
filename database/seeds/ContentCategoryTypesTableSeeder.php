<?php

use App\Models\ContentCategoryType;
use Illuminate\Database\Seeder;

class ContentCategoryTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContentCategoryType::create([
            'name'  => 'news',
            'title' => 'Новости и открытия, обзоры, интервью',
        ]);

        ContentCategoryType::create([
            'name'  => 'specials',
            'title' => 'Банкеты и спецпредложения',
        ]);

        ContentCategoryType::create([
            'name'  => 'readingroom',
            'title' => 'Читальный зал',
        ]);

        ContentCategoryType::create([
            'name'  => 'profy',
            'title' => 'AllCafe профи',
        ]);
    }
}

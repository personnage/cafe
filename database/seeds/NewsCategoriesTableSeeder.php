<?php

use App\Models\NewsCategory;
use Illuminate\Database\Seeder;

class NewsCategoriesTableSeeder extends Seeder
{
    /**
     * Новости и открытия, обзоры, интервью
     *
     * @return void
     */
    public function run()
    {
        NewsCategory::create([
            'id'  => 1,
            'name'  => 'total',
            'title' => 'Новости ресторанов и отелей',
            'description' => 'Новости ресторанов, кафе, баров, а также гостиниц и мини-отелей Санкт-Петербурга и Ленинградской области: открытия и ребрендинг, новые назначения, новинки меню, гастроли шеф-поваров, сезонные предложения, дегустации и эногастрономические вечера, и другие интересные мероприятия.',
        ]);

        NewsCategory::create([
            'id'  => 2,
            'name'  => 'opennews',
            'title' => 'Открытия',
            'description' => 'Здесь публикуются статьи, посвященные недавно открытым ресторанам, кафе, барам и другим заведениям общественного питания.',
        ]);

        NewsCategory::create([
            'id'  => 3,
            'name'  => 'boris',
            'title' => 'Колонка ресторанного критика',
            'description' => 'Авторская колонка Бориса',
        ]);

        NewsCategory::create([
            'id'  => 4,
            'name'  => 'i-dobruy',
            'title' => '«Добрые» заметки',
            'description' => 'Авторская колонка ресторанного обозревателя И. Доброго',
        ]);

        NewsCategory::create([
            'id'  => 5,
            'name'  => 'excursions',
            'title' => 'Ресторанные экскурсии',
            'description' => 'Тематические обзоры',
        ]);

        NewsCategory::create([
            'id'  => 6,
            'name'  => 'hotel_guide',
            'title' => 'Путеводитель по гостиницам',
            'description' => 'Обзоры, посвящённые гостиницам, хостелам, мини-отелям и пансионатам Санкт-Петербурга и Ленинградской области.',
        ]);

        NewsCategory::create([
            'id'  => 7,
            'name'  => 'food_wine',
            'title' => 'Еда и вино с Анной Коварской',
            'description' => 'Журналист и выпускница школы сомелье Анна Коварская держит разговор с ведущими шеф-поварами города о различных продуктах, блюдах, которые можно из них приготовить, и алкогольных напитках, которые уместно к ним подать.',
        ]);

        NewsCategory::create([
            'id'  => 8,
            'name'  => 'interview',
            'title' => 'Интервью',
            'description' => null,
        ]);

        DB::statement('ALTER SEQUENCE news_categories_id_seq RESTART WITH 9');

    }
}

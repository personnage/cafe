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
            'name'  => 'total',
            'title' => 'Новости ресторанов и отелей',
            'description' => 'Новости ресторанов, кафе, баров, а также гостиниц и мини-отелей Санкт-Петербурга и Ленинградской области: открытия и ребрендинг, новые назначения, новинки меню, гастроли шеф-поваров, сезонные предложения, дегустации и эногастрономические вечера, и другие интересные мероприятия.',
            'sort'  => 1,
        ]);

        NewsCategory::create([
            'name'  => 'opennews',
            'title' => 'Открытия',
            'description' => 'Здесь публикуются статьи, посвященные недавно открытым ресторанам, кафе, барам и другим заведениям общественного питания.',
            'sort'  => 2,
        ]);

        NewsCategory::create([
            'name'  => 'boris',
            'title' => 'Колонка ресторанного критика',
            'description' => 'Авторская колонка Бориса',
            'sort'  => 3,
        ]);

        NewsCategory::create([
            'name'  => 'i-dobruy',
            'title' => '«Добрые» заметки',
            'description' => 'Авторская колонка ресторанного обозревателя И. Доброго',
            'sort'  => 4,
        ]);

        NewsCategory::create([
            'name'  => 'excursions',
            'title' => 'Ресторанные экскурсии',
            'description' => 'Тематические обзоры',
            'sort'  => 5,
        ]);

        NewsCategory::create([
            'name'  => 'hotel_guide',
            'title' => 'Путеводитель по гостиницам',
            'description' => 'Обзоры, посвящённые гостиницам, хостелам, мини-отелям и пансионатам Санкт-Петербурга и Ленинградской области.',
            'sort'  => 6,
        ]);

        NewsCategory::create([
            'name'  => 'food_wine',
            'title' => 'Еда и вино с Анной Коварской',
            'description' => 'Журналист и выпускница школы сомелье Анна Коварская держит разговор с ведущими шеф-поварами города о различных продуктах, блюдах, которые можно из них приготовить, и алкогольных напитках, которые уместно к ним подать.',
            'sort'  => 7,
        ]);

        NewsCategory::create([
            'name'  => 'interview',
            'title' => 'Интервью',
            'description' => null,
            'sort'  => 8,
        ]);
    }
}

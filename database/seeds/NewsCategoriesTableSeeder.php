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
            'announcement' => 'Новости ресторанов, кафе, баров, а также гостиниц и мини-отелей Санкт-Петербурга и Ленинградской области: открытия и ребрендинг, новые назначения, новинки меню, гастроли шеф-поваров, сезонные предложения, дегустации и эногастрономические вечера, и другие интересные мероприятия.',
        ]);

        NewsCategory::create([
            'id'  => 2,
            'name'  => 'opennews',
            'title' => 'Открытия',
            'announcement' => 'Здесь публикуются статьи, посвященные недавно открытым ресторанам, кафе, барам и другим заведениям общественного питания.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima ab voluptatum molestias aspernatur sed odio, quia illum sapiente eum at ipsa nemo cupiditate labore ullam consectetur, quisquam nam! Commodi, nam.',
        ]);

        NewsCategory::create([
            'id'  => 3,
            'name'  => 'boris',
            'title' => 'Колонка ресторанного критика',
            'announcement' => 'Авторская колонка Бориса',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ullam magni, ea, eveniet aperiam, aspernatur ipsum quo voluptates adipisci repudiandae corporis sed modi blanditiis mollitia consectetur eum ad nihil doloribus!',
        ]);

        NewsCategory::create([
            'id'  => 4,
            'name'  => 'i-dobruy',
            'title' => '«Добрые» заметки',
            'announcement' => 'Авторская колонка ресторанного обозревателя И. Доброго',
        ]);

        NewsCategory::create([
            'id'  => 5,
            'name'  => 'excursions',
            'title' => 'Ресторанные экскурсии',
            'announcement' => 'Тематические обзоры',
        ]);

        NewsCategory::create([
            'id'  => 6,
            'name'  => 'hotel_guide',
            'title' => 'Путеводитель по гостиницам',
            'announcement' => 'Обзоры, посвящённые гостиницам, хостелам, мини-отелям и пансионатам Санкт-Петербурга и Ленинградской области.',
        ]);

        NewsCategory::create([
            'id'  => 7,
            'name'  => 'food_wine',
            'title' => 'Еда и вино с Анной Коварской',
            'announcement' => 'Журналист и выпускница школы сомелье Анна Коварская держит разговор с ведущими шеф-поварами города о различных продуктах, блюдах, которые можно из них приготовить, и алкогольных напитках, которые уместно к ним подать.',
        ]);

        NewsCategory::create([
            'id'  => 8,
            'name'  => 'interview',
            'title' => 'Интервью',
            'announcement' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum vel reprehenderit reiciendis optio quis, corrupti magnam harum consectetur obcaecati, nisi numquam facilis cumque quam dolore, earum minus voluptate ad odit.'
        ]);

        DB::statement('ALTER SEQUENCE news_categories_id_seq RESTART WITH 9');
    }
}

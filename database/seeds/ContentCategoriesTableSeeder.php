<?php

use App\Models\ContentCategory;
use Illuminate\Database\Seeder;

class ContentCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // type: Новости и открытия, обзоры, интервью

        ContentCategory::create([
            'name'  => 'total',
            'title' => 'Новости ресторанов и отелей',
            'description' => 'Новости ресторанов, кафе, баров, а также гостиниц и мини-отелей Санкт-Петербурга и Ленинградской области: открытия и ребрендинг, новые назначения, новинки меню, гастроли шеф-поваров, сезонные предложения, дегустации и эногастрономические вечера, и другие интересные мероприятия.',
            'content_category_type_id' => 1,
        ]);

        ContentCategory::create([
            'name'  => 'opennews',
            'title' => 'Открытия',
            'description' => 'Здесь публикуются статьи, посвященные недавно открытым ресторанам, кафе, барам и другим заведениям общественного питания.',
            'content_category_type_id' => 1,
        ]);

        ContentCategory::create([
            'name'  => 'boris',
            'title' => 'Колонка ресторанного критика',
            'description' => 'Авторская колонка Бориса',
            'content_category_type_id' => 1,
        ]);

        ContentCategory::create([
            'name'  => 'i-dobruy',
            'title' => '«Добрые» заметки',
            'description' => 'Авторская колонка ресторанного обозревателя И. Доброго',
            'content_category_type_id' => 1,
        ]);

        ContentCategory::create([
            'name'  => 'excursions',
            'title' => 'Ресторанные экскурсии',
            'description' => 'Тематические обзоры',
            'content_category_type_id' => 1,
        ]);

        ContentCategory::create([
            'name'  => 'hotel_guide',
            'title' => 'Путеводитель по гостиницам',
            'description' => 'Обзоры, посвящённые гостиницам, хостелам, мини-отелям и пансионатам Санкт-Петербурга и Ленинградской области.',
            'content_category_type_id' => 1,
        ]);

        ContentCategory::create([
            'name'  => 'food_wine',
            'title' => 'Еда и вино с Анной Коварской',
            'description' => 'Журналист и выпускница школы сомелье Анна Коварская держит разговор с ведущими шеф-поварами города о различных продуктах, блюдах, которые можно из них приготовить, и алкогольных напитках, которые уместно к ним подать.',
            'content_category_type_id' => 1,
        ]);

        ContentCategory::create([
            'name'  => 'interview',
            'title' => 'Интервью',
            'description' => null,
            'content_category_type_id' => 1,
        ]);

        // type: Банкеты и спецпредложения
        // TODO: /restaurants/specials -> /specials
        // TODO: запилить ЧПУ

        ContentCategory::create([
            'name'  => '1',
            'title' => 'Корпоративные праздники',
            'description' => '(в т. ч. корпоративные новогодние и рождественские праздники)',
            'content_category_type_id' => 2,
        ]);

        ContentCategory::create([
            'name'  => '2',
            'title' => 'Завтраки',
            'description' => null,
            'content_category_type_id' => 2,
        ]);

        ContentCategory::create([
            'name'  => '3',
            'title' => 'Банкеты',
            'description' => '(проведение банкетов в ресторанах и кафе)',
            'content_category_type_id' => 2,
        ]);

        ContentCategory::create([
            'name'  => '4',
            'title' => 'Свадьбы',
            'description' => '(предложения по проведению свадеб в ресторанах и кафе)',
            'content_category_type_id' => 2,
        ]);

        ContentCategory::create([
            'name'  => '5',
            'title' => 'Детские праздники',
            'description' => '(проведение детских праздников в ресторанах и кафе)',
            'content_category_type_id' => 2,
        ]);

        ContentCategory::create([
            'name'  => '6',
            'title' => 'Предложения для тургрупп',
            'description' => '(описание и цены, предложения для турфирм)',
            'content_category_type_id' => 2,
        ]);

        ContentCategory::create([
            'name'  => '7',
            'title' => 'Catering (выездное обслуживание)',
            'description' => null,
            'content_category_type_id' => 2,
        ]);

        ContentCategory::create([
            'name'  => '8',
            'title' => 'Развлекательные программы',
            'description' => null,
            'content_category_type_id' => 2,
        ]);

        ContentCategory::create([
            'name'  => '9',
            'title' => 'Загородный отдых',
            'description' => null,
            'content_category_type_id' => 2,
        ]);

        ContentCategory::create([
            'name'  => '10',
            'title' => 'Выпускной вечер',
            'description' => null,
            'content_category_type_id' => 2,
        ]);
    }
}

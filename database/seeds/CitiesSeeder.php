<?php

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            // domain          name                 geonameId
            'astrakhan'     => 'Астрахань',         // 580497
            'bel'           => 'Белгород',          // 578072
            'vnov'          => 'Великий Новгород',  // 519336
            'vlad'          => 'Владивосток',       // 2013348
            'vrn'           => 'Воронеж',           // 472045
            'ekburg'        => 'Екатеринбург',      // 1486209
            'izhevsk'       => 'Ижевск',            // 554840
            'kazan'         => 'Казань',            // 551487
            'klgd'          => 'Калининград',
            'kaluga'        => 'Калуга',
            'kostroma'      => 'Кострома',
            'krasnodar'     => 'Краснодар',
            'krasnoyarsk'   => 'Красноярск',
            'ks'            => 'Курск',
            'lc'            => 'Липецк',
            'msk'           => 'Москва',            // 524901
            'nalchik'       => 'Нальчик',
            'nnov'          => 'Нижний Новгород',
            'novosibirsk'   => 'Новосибирск',
            'omsk'          => 'Омск',
            'orl'           => 'Орёл',
            'perm'          => 'Пермь',
            'pskov'         => 'Псков',
            'rnd'           => 'Ростов-на-Дону',
            'samara'        => 'Самара',
            'spb'           => 'Санкт-Петербург', // 498817
            'sochi'         => 'Сочи',
            'tmb'           => 'Тамбов',
            'tomsk'         => 'Томск',
            'tula'          => 'Тула',
            'ufa'           => 'Уфа',
            'fin'           => 'Финляндия',        // 660013
            'chel'          => 'Челябинск',
            'eesti'         => 'Эстония',          // 453733
        ];

        foreach ($cities as $domain => $name) {
            City::create(compact('name', 'domain'));
        }
    }
}

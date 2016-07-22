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
            'astrakhan'   => 'Астрахань',
            'bel'         => 'Белгород',
            'chel'        => 'Челябинск',
            'eesti'       => 'Эстония',
            'ekburg'      => 'Екатеринбург',
            'fin'         => 'Финляндия',
            'izhevsk'     => 'Ижевск',
            'kaluga'      => 'Калуга',
            'kazan'       => 'Казань',
            'klgd'        => 'Калининград',
            'kostroma'    => 'Кострома',
            'krasnodar'   => 'Краснодар',
            'krasnoyarsk' => 'Красноярск',
            'ks'          => 'Курск',
            'lc'          => 'Липецк',
            'msk'         => 'Москва',
            'nalchik'     => 'Нальчик',
            'nnov'        => 'Нижний Новгород',
            'novosibirsk' => 'Новосибирск',
            'omsk'        => 'Омск',
            'orl'         => 'Орёл',
            'perm'        => 'Пермь',
            'pskov'       => 'Псков',
            'rnd'         => 'Ростов-на-Дону',
            'samara'      => 'Самара',
            'sochi'       => 'Сочи',
            'spb'         => 'Санкт-Петербург',
            'tmb'         => 'Тамбов',
            'tomsk'       => 'Томск',
            'tula'        => 'Тула',
            'ufa'         => 'Уфа',
            'vlad'        => 'Владивосток',
            'vnov'        => 'Великий Новгород',
            'vrn'         => 'Воронеж',
        ];

        foreach ($cities as $domain => $name) {
            City::create(compact('name', 'domain'));
        }
    }
}

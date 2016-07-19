@extends('layouts.application')

@section('content')
    <div id="container">
        <div id="map-main" class="mapMain col-xs-12">
            <div class="col-lg-10 col-xs-12 citiesBlock">
                <p style="">Поиск ресторанов в вашем городе:</p>
                <div class="main-cities col-xs-12 no-padding">
                    <a href="http://spb.allcafe.ru">Санкт-Петербург</a>
                    <a href="http://msk.allcafe.ru">Москва</a>
                </div>
                <div class="big-cities col-xs-12 no-padding">
                    <a href="http://vrn.allcafe.ru">Воронеж</a>
                    <a href="http://ekburg.allcafe.ru">Екатеринбург</a>
                    <a href="http://kazan.allcafe.ru">Казань</a>
                    <a href="http://krasnodar.allcafe.ru">Краснодар</a>
                    <a href="http://nnov.allcafe.ru">Нижний Новгород</a>
                    <a href="http://rnd.allcafe.ru">Ростов-на-Дону</a>
                </div>
                <div class="other-cities col-xs-12 no-padding">
                    <a href="http://astrakhan.allcafe.ru">Астрахань</a>
                    <a href="http://bel.allcafe.ru">Белгород</a>
                    <a href="http://vnov.allcafe.ru">Великий Новгород</a>
                    <a href="http://vlad.allcafe.ru">Владивосток</a>
                    <a href="http://izhevsk.allcafe.ru">Ижевск</a>
                    <a href="http://kaluga.allcafe.ru">Калуга</a>
                    <a href="http://kostroma.allcafe.ru">Кострома</a>
                    <a href="http://krasnoyarsk.allcafe.ru">Красноярск</a>

                    <a href="http://ks.allcafe.ru">Курск</a>
                    <a href="http://lc.allcafe.ru">Липецк</a>
                    <a href="http://nalchik.allcafe.ru">Нальчик</a>
                    <a href="http://novosibirsk.allcafe.ru">Новосибирск</a>
                    <a href="http://omsk.allcafe.ru">Омск</a>
                    <a href="http://orl.allcafe.ru">Орёл</a>
                    <a href="http://perm.allcafe.ru">Пермь</a>
                    <a href="http://pskov.allcafe.ru">Псков</a>
                    <a href="http://samara.allcafe.ru">Самара</a>
                    <a href="http://sochi.allcafe.ru">Сочи</a>

                    <a href="http://tmb.allcafe.ru">Тамбов</a>
                    <a href="http://tomsk.allcafe.ru">Томск</a>
                    <a href="http://tula.allcafe.ru">Тула</a>
                    <a href="http://ufa.allcafe.ru">Уфа</a>
                    <a href="http://chel.allcafe.ru">Челябинск</a>
                </div>
            </div>
            <div class="col-lg-2 hidden-xs text-center mapMain__logo">
                <div class="info">
                    <img src="/assets/img/app/main/allcafe_flat.png">
                    <p id="allcafe">allcafe</p>
                    <p>Все рестораны и кафе в вашем городе<em>!</em></p>
                </div>
            </div>
            <div class="other-countries row col-xs-12">
                <p>Другие страны:</p>

                <a href="http://eesti.allcafe.ru"><img src="/assets/img/app/main/Estonia.png"> Эстония</a>
                <a href="http://fin.allcafe.ru"><img src="/assets/img/app/main/Finland.png"> Финляндия</a>
                <div class="pull-right hidden-xs">
                    <a target="_blank" href="https://itunes.apple.com/ru/app/allcafe/id470035370?mt=8" id="appStore"></a>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.komandor.allcafe" id="googlePlay"></a>
                </div>
            </div>
        </div>
    </div>

    @include('app.shared._news-block')
    @include('app.shared._article-block')
@overwrite

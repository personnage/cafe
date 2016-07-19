<div class="header">
    <div class="container">
        <a href="{{ url('') }}" class="logo col-lg-2 col-xs-12"><!-- --></a>
        <div class="citySelector col-lg-4 col-md-5 col-sm-6 hidden-xs">
            <span class="citySelector__text">Все рестораны и кафе:</span>
            <a href="" class="citySelector__name">Выберите свой город</a>
            <ul class="selector__hidden">
                <li class="selected" data-title="Выберите свой город" data-subdomain="">Выберите свой город</li>
                <li data-title="Москвы" data-subdomain="msk">Москва</li>
                <li data-title="Астрахани" data-subdomain="astrakhan">Астрахань</li>
                <li data-title="Белгорода" data-subdomain="bel">Белгород</li>
                <li data-title="Великого Новгорода" data-subdomain="vnov">Великий Новгород</li>
                <li data-title="Владивостока" data-subdomain="vlad">Владивосток</li>
                <li data-title="Воронежа" data-subdomain="vrn">Воронеж</li>
                <li data-title="Екатеринбурга" data-subdomain="ekburg">Екатеринбург</li>
                <li data-title="Ижевска" data-subdomain="izhevsk">Ижевск</li>
                <li data-title="Казани" data-subdomain="kazan">Казань</li>
                <li data-title="Калининграда" data-subdomain="klgd">Калининград</li>
                <li data-title="Калуги" data-subdomain="kaluga">Калуга</li>
                <li data-title="Костромы" data-subdomain="kostroma">Кострома</li>
                <li data-title="Краснодара" data-subdomain="krasnodar">Краснодар</li>
                <li data-title="Красноярска" data-subdomain="krasnoyarsk">Красноярск</li>
                <li data-title="Курска" data-subdomain="ks">Курск</li>
                <li data-title="Липецка" data-subdomain="lc">Липецк</li>
                <li data-title="Нальчика" data-subdomain="nalchik">Нальчик</li>
                <li data-title="Нижнего Новгорода" data-subdomain="nnov">Нижний Новгород</li>
                <li data-title="Новосибирска" data-subdomain="novosibirsk">Новосибирск</li>
                <li data-title="Омска" data-subdomain="omsk">Омск</li>
                <li data-title="Орла" data-subdomain="orl">Орёл</li>
                <li data-title="Перми" data-subdomain="perm">Пермь</li>
                <li data-title="Пскова" data-subdomain="pskov">Псков</li>
                <li data-title="Ростова-на-Дону" data-subdomain="rnd">Ростов-на-Дону</li>
                <li data-title="Самары" data-subdomain="samara">Самара</li>
                <li data-title="Сочи" data-subdomain="sochi">Сочи</li>
                <li data-title="Тамбова" data-subdomain="tmb">Тамбов</li>
                <li data-title="Томска" data-subdomain="tomsk">Томск</li>
                <li data-title="Тулаы" data-subdomain="tula">Тула</li>
                <li data-title="Уфы" data-subdomain="ufa">Уфа</li>
                <li data-title="Финляндии" data-subdomain="fin">Финляндия</li>
                <li data-title="Челябинска" data-subdomain="chel">Челябинск</li>
                <li data-title="Эстонии" data-subdomain="eesti">Эстония</li>
            </ul>
        </div>
        {{--<div class="quick-search col-md-2">--}}
            {{--<form action="/restaurants/search-fulltext" method="GET">--}}
                {{--<input id="top-quick-search" class="quick-search__text" name="title" placeholder="Название или адрес заведения" type="text">--}}
                {{--<div id="suggestions" class="quick-search__suggestions"></div>--}}
                {{--<input type="submit" class="quick-search__submit" value="">--}}
            {{--</form>--}}
        {{--</div>--}}
        <div class="header__loggedBlock col-lg-4 col-md-4 hidden-xs">
            <img src="http://assets.allcafe.ru/pic/avatars/40x40/0.jpeg" alt="" class="col-lg-3 col-md-3 pull-right">
            <div class="info col-lg-3 col-md-3 col-sm-6 pull-right">
                <a href="{{ url("community/feed") }}" class="info__profile">Мой AllCafe</a>
                <span class="info__name">p.lebedev</span>
                <a href="{{ url("community/out") }}" class="info__exit">выход</a>
            </div>
            <div class="icons col-lg-6 col-md-5 hidden-sm pull-right">
                <a href="{{ url("community/feed#recommend") }}" class="icons__notification col-lg-3 col-md-4">
                    <span>3</span>
                </a>
                <a href="{{ url("community/feed#group") }}" class="icons__comment col-lg-3 col-md-4">
                    <span>10</span>
                </a>
                <a href="{{ url("community/users/inbox") }}" class="icons__mail col-lg-3 col-md-4">
                    <span>3</span>
                </a>
                <a href="{{ url("admin/errors") }}" class="icons__mail icons__admin col-md-3 visible-lg">
                    <span>444</span>
                </a>
            </div>
        </div>
        <div class="header__userBlock col-lg-3 col-md-4 col-sm-3 hidden-xs pull-right no-padding hidden">
            <a href="{{ url("/reg") }}" rel="nofollow" class="hidden-sm">Регистрация</a>
            <a href="{{ url("/login") }}" rel="nofollow">Вход</a>
        </div>
    </div>
</div>

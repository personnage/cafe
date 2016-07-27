<div class="header">
    <div class="container">
        <a href="{{ url('') }}" class="logo col-lg-2 col-xs-12"><!-- --></a>
        <div class="citySelector col-lg-4 col-md-5 col-sm-6 hidden-xs">
            <span class="citySelector__text">Все рестораны и кафе:</span>
            <div class="collapse navbar-collapse citySelector__dropdown">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle citySelector__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Выберите свой город
                        </a>
                        <div class="dropdown-menu citySelector__selector">
                            <ul>
                                <li><a href="http://spb.allcafe.app">Санкт-Петербург</a></li>
                                <li><a href="http://msk.allcafe.app">Москва</a></li>
                                <li><a href="http://astrakhan.allcafe.app">Астрахань</a></li>
                                <li><a href="http://bel.allcafe.app">Белгород</a></li>
                                <li><a href="http://vnov.allcafe.app">Великий Новгород</a></li>
                                <li><a href="http://vlad.allcafe.app">Владивосток</a></li>
                                <li><a href="http://vrn.allcafe.app">Воронеж</a></li>
                                <li><a href="http://ekburg.allcafe.app">Екатеринбург</a></li>
                                <li><a href="http://izhevsk.allcafe.app">Ижевск</a></li>
                                <li><a href="http://kazan.allcafe.app">Казань</a></li>
                                <li><a href="http://klgd.allcafe.app">Калининград</a></li>
                                <li><a href="http://kaluga.allcafe.app">Калуга</a></li>
                                <li><a href="http://kostroma.allcafe.app">Кострома</a></li>
                                <li><a href="http://krasnodar.allcafe.app">Краснодар</a></li>
                                <li><a href="http://krasnoyarsk.allcafe.app">Красноярск</a></li>
                                <li><a href="http://ks.allcafe.app">Курск</a></li>
                                <li><a href="http://lc.allcafe.app">Липецк</a></li>
                                <li><a href="http://nalchik.allcafe.app">Нальчик</a></li>
                                <li><a href="http://nnov.allcafe.app">Нижний Новгород</a></li>
                                <li><a href="http://novosibirsk.allcafe.app">Новосибирск</a></li>
                                <li><a href="http://omsk.allcafe.app">Омск</a></li>
                                <li><a href="http://orl.allcafe.app">Орёл</a></li>
                                <li><a href="http://perm.allcafe.app">Пермь</a></li>
                                <li><a href="http://pskov.allcafe.app">Псков</a></li>
                                <li><a href="http://rnd.allcafe.app">Ростов-на-Дону</a></li>
                                <li><a href="http://samara.allcafe.app">Самара</a></li>
                                <li><a href="http://sochi.allcafe.app">Сочи</a></li>
                                <li><a href="http://tmb.allcafe.app">Тамбов</a></li>
                                <li><a href="http://tomsk.allcafe.app">Томск</a></li>
                                <li><a href="http://tula.allcafe.app">Тула</a></li>
                                <li><a href="http://ufa.allcafe.app">Уфа</a></li>
                                <li><a href="http://fin.allcafe.app">Финляндия</a></li>
                                <li><a href="http://chel.allcafe.app">Челябинск</a></li>
                                <li><a href="http://eesti.allcafe.app">Эстония</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        {{--<div class="quick-search col-md-2">--}}
            {{--<form action="/restaurants/search-fulltext" method="GET">--}}
                {{--<input id="top-quick-search" class="quick-search__text" name="title" placeholder="Название или адрес заведения" type="text">--}}
                {{--<div id="suggestions" class="quick-search__suggestions"></div>--}}
                {{--<input type="submit" class="quick-search__submit" value="">--}}
            {{--</form>--}}
        {{--</div>--}}
        @if(Auth::guest())
            <div class="header__userBlock col-lg-3 col-md-4 col-sm-3 hidden-xs pull-right no-padding">
                <a href="{{ url("/register") }}" rel="nofollow" class="hidden-sm">Регистрация</a>
                <a href="{{ url("/login") }}" rel="nofollow">Вход</a>
            </div>
        @else
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
        @endif
    </div>
</div>

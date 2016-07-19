<nav class="menu navbar navbar-inverse">
{{--<input type="checkbox" id="button" />--}}
{{--<label for="button"></label>--}}
<div class="container">
    <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="{{ url("restaurants") }}#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                    Рестораны
                </a>
                <div class="dropdown-menu submenu">
                    <div class="container">
                        <div class="col-md-3 submenu__column">
                            <ul>
                                <li>
                                    <a href="{{ url("restaurants") }}">Каталог ресторанов</a>
                                </li>
                                <li>
                                    <a href="{{ url("restaurants/guide") }}">Отзывы о ресторанах</a>
                                </li>
                                <li>
                                    <a href="{{ url("restaurants/posters") }}">Афиша</a>
                                </li>
                                <li>
                                    <a href="{{ url("restaurants/journal") }}">Журналы</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 submenu__column">
                            <ul>
                                <li>
                                    <a href="{{ url("rating") }}">Рейтинги ресторанов</a>
                                </li>
                                <li>
                                    <a href="{{ url("restaurants/discount") }}">Скидки, бонусы, подарки</a>
                                </li>
                                <li>
                                    <a href="{{ url("restaurants/delivery") }}">Доставка еды</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 submenu__column">
                            <a href="{{ url("restaurants/guest-add") }}" class="btn btn-primary btn-orange">Добавить ресторан</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="link">
                <a href="{{ url("rating") }}">Топ ресторанов</a>
            </li>
            <li class="dropdown">
                <a href="{{ url("restaurants/specials") }}#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                    Банкеты
                </a>
                <div class="dropdown-menu submenu">
                    <div class="container">
                        <div class="col-md-3 submenu__column">
                            <ul>
                                <li>
                                    <a href="{{ url("restaurants/specials/1") }}" class="with-icon kp">
                                        <span>Корпоративные праздники</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url("restaurants/specials/3") }}" class="with-icon bn">
                                        <span>Банкеты</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url("restaurants/specials/4") }}" class="with-icon sv">
                                        <span>Свадьбы</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url("restaurants/specials/5") }}" class="with-icon dp">
                                        <sapn>Детские праздники</sapn>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 submenu__column">
                            <ul>
                                <li>
                                    <a href="{{ url("restaurants/specials/7") }}" class="with-icon vo">
                                        <span>Catering (выездное обслуживание)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown">
                <a href="{{ url("news") }}#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                    Новости и обзоры
                </a>
                <div class="dropdown-menu submenu">
                    <div class="container">
                        <div class="col-md-3 submenu__column">
                            <ul>
                                <li>
                                    <a href="{{ url("news/opennews") }}">Открытия</a>
                                </li>
                                <li>
                                    <a href="{{ url("news/boris") }}">Колонка ресторанного критика</a>
                                </li>
                                <li>
                                    <a href="{{ url("news/interview") }}">Интервью</a>
                                </li>
                                <li>
                                    <a href="{{ url("news/i-dobruy") }}">Авторская колонка И.Доброго</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 submenu__column">
                            <ul>
                                <li>
                                    <a href="{{ url("news/total") }}">Все новости</a>
                                </li>
                                <li>
                                    <a href="{{ url("news/excursions") }}">Тематические обзоры</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
</nav>

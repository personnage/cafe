@extends('layouts.application')

@section('content')
    <div class="col-sm-9">
        <div class="row">
            <div class="typeHeader std-block col-lg-12">
                <h1>
                    Новости и открытия, обзоры, интервью
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 typeBlock std-block">
                <a href="{{ url("news/total") }}" class="pull-left">
                    <img src="http://assets.allcafe.ru/pic/pages/c84253d74c4c46b1f359457c851cef33f3b99298.jpeg?37-ea5d77efe7e36c2bc57587b174147446"
                         alt="Новости ресторанов и отелей">
                </a>
                <div class="info">
                    <a href="{{ url("news/total") }}"><h2>Новости ресторанов и отелей</h2></a>
                    <p>Новости ресторанов, кафе, баров, а также гостиниц и мини-отелей Санкт-Петербурга и Ленинградской
                        области: открытия и ребрендинг, новые назначения, новинки меню, гастроли шеф-поваров, сезонные
                        предложения, дегустации и эногастрономические вечера, и другие интересные мероприятия.</p>
                </div>
            </div>

            <div class="col-lg-12 typeBlock std-block">
                <a href="{{ url("news/opennews") }}" class="pull-left">
                    <img src="http://assets.allcafe.ru/pic/pages/416db6e77a636637911b3f2ae35a01443aa60cf4.jpeg?45-898b53c365be8fe54ae0961032a437a7"
                         alt="Открытия">
                </a>
                <div class="info">
                    <a href="{{ url("news/opennews") }}"><h2>Открытия</h2></a>
                    <p>Здесь публикуются статьи, посвященные недавно открытым ресторанам, кафе, барам и другим
                        заведениям общественного питания.</p>
                    <p></p>
                </div>
            </div>

            <div class="col-lg-12 typeBlock std-block">
                <a href="{{ url("news/boris") }}" class="pull-left">
                    <img src="http://assets.allcafe.ru/pic/pages/5dbe1476f8735178664521eb9db7caa55ef001cf.jpeg?19-4f246e89bf9d4ace12a95a71e7064184"
                         alt="Колонка ресторанного критика">
                </a>
                <div class="info">
                    <a href="{{ url("news/boris") }}"><h2>Колонка ресторанного критика</h2></a>
                    <p>Авторская колонка Бориса</p>
                </div>
            </div>

            <div class="col-lg-12 typeBlock std-block">
                <a href="{{ url("news/i-dobruy") }}" class="pull-left">
                    <img src="http://assets.allcafe.ru/icons/grey100-brdr.jpg" alt="«Добрые» заметки">
                </a>
                <div class="info">
                    <a href="{{ url("news/i-dobruy") }}"><h2>«Добрые» заметки</h2></a>
                    <p>Авторская колонка ресторанного обозревателя И.Доброго</p>
                </div>
            </div>

            <div class="col-lg-12 typeBlock std-block">
                <a href="{{ url("news/excursions") }}" class="pull-left">
                    <img src="http://assets.allcafe.ru/pic/pages/cd124d7ec68e5c5a7e10e22de380d14f8f2cbf73.jpeg?39-28ba1b6dd114aa76a92749dd035825cf"
                         alt="Ресторанные экскурсии">
                </a>
                <div class="info">
                    <a href="{{ url("news/excursions") }}"><h2>Ресторанные экскурсии</h2></a>
                    <p>Тематические обзоры</p>
                    <p></p>
                </div>
            </div>

            <div class="col-lg-12 typeBlock std-block">
                <a href="{{ url("news/hotel_guide") }}" class="pull-left">
                    <img src="http://assets.allcafe.ru/pic/pages/5366be79fcc82acd089be1760eeaee3e07f98338.jpeg?28-8f86f8f0ceadd50862ad3bf523387344"
                         alt="Путеводитель по гостиницам">
                </a>
                <div class="info">
                    <a href="{{ url("news/hotel_guide") }}"><h2>Путеводитель по гостиницам</h2></a>
                    <p>Обзоры, посвященные гостиницам, хостелам, мини-отелям и пансионатам Санкт-Петербурга и
                        Ленинградской области.</p>
                    <p></p>
                </div>
            </div>

            <div class="col-lg-12 typeBlock std-block">
                <a href="{{ url("news/food_wine") }}" class="pull-left">
                    <img src="http://assets.allcafe.ru/pic/pages/97f5be867503b6c1b67c61c3c4d3b0d5d171e3f7.jpeg?1-312ff44bf2ddc91a93eb1a0d22e16847"
                         alt="Еда и вино с Анной Коварской">
                </a>
                <div class="info">
                    <a href="{{ url("news/food_wine") }}"><h2>Еда и вино с Анной Коварской</h2></a>
                    <p>Журналист и выпускница школы сомелье Анна Коварская держит разговор с ведущими шеф-поварами
                        города о различных продуктах, блюдах, которые можно из них приготовить, и алкогольных напитках,
                        которые уместно к ним подать.</p>
                    <p></p>
                </div>
            </div>

            <div class="col-lg-12 typeBlock std-block">
                <a href="{{ url("news/interview") }}" class="pull-left">
                    <img src="http://assets.allcafe.ru/pic/pages/35208a02d7220528b46b13f53c7ff1e27cd571d2.jpeg?3-b18bb66a12343b8051546dc7235912bf"
                         alt="Интервью">
                </a>
                <div class="info">
                    <a href="interview"><h2>Интервью</h2></a>
                    <p></p>
                </div>
            </div>
        </div>
    </div>

    @include('app.shared._sidebar')
@endsection
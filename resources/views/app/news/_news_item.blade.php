@foreach ($items as $item)
    <div class="col-xs-12 newsItem std-block no-padding">
        <div class="newsItem__info col-xs-12">
            <div class="info-img col-xs-3 no-padding">
                <a href="{!! $item->url() !!}">
                    <img class="img-responsive" src="http://assets.allcafe.ru/pic/news2/260x194/3c73ec6217c142dd4b88935dbd88929569bc4118.jpeg" alt="Розыгрыш велосипедов Shulz в ресторане «Двор Помидор»">
                </a>
            </div>
            <div class="info col-xs-9">

                <time>{{ $item->getPublishedDateTime() }}</time>

                <a class="title" href="{!! $item->url() !!}">{{ $item->title }}</a>

                <p class="hidden-sm hidden-xs">{!! $item->announcement !!}</p>

                <div class="personsBlock">
                    Авторы:
                    <a href="http://spb.allcafe.ru/search2/authors/spb.allcafe.ru - Все рестораны и кафе Санкт-Петербурга" class="personsBlock__item">
                        <span>spb.allcafe.ru - Все рестораны и кафе Санкт-Петербурга</span>
                    </a>
                </div>

                <div class="tagsBlock">
                    Теги:
                    <a href="http://spb.allcafe.ru/search2/tags/с велосипедом" class="tagsBlock__item"><span>с велосипедом</span></a>
                </div>
            </div>
        </div>
        @include('app.shared._social_tail')
    </div>
@endforeach
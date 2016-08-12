@foreach ($items as $item)
    <div class="col-xs-12 newsItem articleItem std-block no-padding">
        <div class="newsItem__info col-xs-12">
            <div class="info-img col-xs-2 no-padding">
                <a href="{!! $item->url() !!}">
                    <img class="img-responsive" src="http://assets.allcafe.ru/pic/pages/160x160/618aa77f2f1248729151eb572c81df70d2a5eea8.jpeg?5-96dff53dbe5bc053170e73a1921eaddc" alt="Путешествия ресторанного критика. Кострома, кафе «Сусанин House»">
                </a>
            </div>
            <div class="info col-xs-9">

                <time>{{ $item->getPublishedDateTime() }}</time>

                <a class="title" href="{!! $item->url() !!}">{{ $item->title }}</a>

                <p class="hidden-sm hidden-xs">{!! $item->announcement !!}</p>

                <div class="personsBlock">
                    Автор:
                    <a href="http://spb.allcafe.ru/search2/authors/Ресторанный критик Борис" class="personsBlock__item">
                        <span>Ресторанный критик Борис</span>
                    </a>
                </div>

                <div class="personsBlock">
                    Персоналии:
                    <a href="http://spb.allcafe.ru/search2/persons/Игорь Гришечкин" class="personsBlock__item">
                        <span>Игорь Гришечкин</span>
                    </a>
                </div>

                <div class="tagsBlock">
                    Теги:
                    <a href="http://spb.allcafe.ru/search2/tags/с велосипедом" class="tagsBlock__item"><span>с велосипедом</span></a>
                </div>
            </div>
        </div>
    </div>
@endforeach
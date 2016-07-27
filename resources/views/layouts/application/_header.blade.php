<div class="header">
  <div class="container">
    <a href="/" class="logo col-lg-2 col-xs-12">Allcafe</a>
    <div class="citySelector col-lg-4 col-md-5 col-sm-6 hidden-xs">
      <span class="citySelector__text">Все рестораны и кафе:</span>
      <div class="collapse navbar-collapse citySelector__dropdown">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle citySelector__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              {{ $cities->where('domain', subdomain(url('/')))->pluck('name')->first() ?? 'Выберите свой город' }}
            </a>
            <div class="dropdown-menu citySelector__selector">
              <ul>
                @foreach($cities as $city)
                  <li><a href="{{ route('home', $city->domain) }}">{{ $city->name }}</a></li>
                @endforeach
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
      @include('layouts.application._profile')
    @endif
  </div>
</div>

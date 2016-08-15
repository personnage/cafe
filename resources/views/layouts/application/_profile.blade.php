<div class="header__loggedBlock col-lg-2 col-md-4 hidden-xs">
  <img src="{{ Gravatar::src($user->email, 100) }}" class="col-lg-6 col-md-3 pull-right img-circle">

  <div class="info col-lg-6 col-md-9 col-sm-6 pull-right">
    <a href="{{ url("profile", $user->id) }}" class="info__profile">Мой AllCafe</a>
    <span class="info__name">{{ $user->name }}</span>
    <a href="{{ url("logout") }}" class="info__exit">выход</a>
  </div>

  {{--<div class="icons col-lg-6 col-md-5 hidden-sm pull-right">--}}
    {{--<a href="{{ url("community/feed#recommend") }}">--}}
      {{--<i class="fa fa-bell-o" aria-hidden="true"></i>--}}
    {{--</a>--}}

    {{--<a href="{{ url("community/feed#recommend") }}">--}}
      {{--<i class="fa fa-comment-o" aria-hidden="true"></i>--}}
    {{--</a>--}}

    {{--<a href="{{ url("community/feed#recommend") }}">--}}
      {{--<i class="fa fa-envelope-o" aria-hidden="true"></i>--}}
    {{--</a>--}}

    {{-- <a href="{{ url("community/feed#recommend") }}" class="icons__notification col-lg-3 col-md-4">
      <span>3</span>
    </a> --}}

    {{-- <a href="{{ url("community/feed#group") }}" class="icons__comment col-lg-3 col-md-4">
      <span>10</span>
    </a> --}}

    {{-- <a href="{{ url("community/users/inbox") }}" class="icons__mail col-lg-3 col-md-4">
      <span>3</span>
    </a> --}}

    {{-- <a href="{{ url("admin/errors") }}" class="icons__mail icons__admin col-md-3 visible-lg">
      <span>1</span>
    </a> --}}

  {{--</div>--}}
</div>

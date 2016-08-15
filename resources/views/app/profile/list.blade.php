@extends('layouts.application')

@section('content')

    <div class="col-md-9 col-xs-12">
        <div class="row">
            <div class="typeHeader articleHeader std-block col-lg-12 no-padding">
                <h1>Сообщество Allcafe</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 std-block">
                <ul class="communityList">
                    @foreach($users as $user)
                        <li class="communityList__item col-sm-12">
                            <div class="row">
                                <div class="col-sm-2 text-right">
                                    <img class="img-responsive img-circle" src="{{ Gravatar::src($user->email, 150) }}" alt="">
                                    <span class="badge">9836</span>
                                </div>
                                <div class="body col-sm-10">
                                    <a href="{{ url("profile", $user->id) }}">{{ $user->name }}</a>
                                    <p>Санкт-Петербург</p>
                                    <time><strong>Зарегистрирован: </strong>{{ $user->created_at->format('d.m.Y в H:i') }}</time>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 text-center pagination">
                <a class="pagination__button">Назад</a>
                <a class="pagination__button pagination__button__active">Вперед</a>
            </div>
        </div>
    </div>

    @include('app.shared._sidebar')
@endsection
@extends('layouts.application')

@section('content')
<div class="container">
    <div class="std-block">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>Регистрация почти завершена...</h2>
                <p class="lead">На ваш email было выслано письмо с подтверждением регистрации</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p>
                    Не получили письмо? Проверьте папку "Спам" или
                    <a href="{{ url('/confirmation') }}">отправьте письмо повторно</a>
                </p>
            </div>
        </div>
    </div>


</div>
@endsection

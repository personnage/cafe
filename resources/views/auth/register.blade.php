@extends('layouts.application')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"><h2>Регистрация</h2></div>
        <div class="panel-body">
          <form method="POST" action="{{ url('/register') }}" role="form" class="form-horizontal loginBlock__form">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Имя</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">E-Mail</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Пароль</label>

              <div class="col-md-6">
                <input type="password" name="password" id="password" class="form-control">

                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-orange">Зарегистрироваться</button>
              </div>
            </div>
          </form>

          <hr>
          <div class="col-md-9 col-md-offset-2">

            <div class="btn-group btn-group" role="group" aria-label="Socialite">

              <a class="btn btn-default" href="{{ url('auth/vk') }}">
                <i class="fa fa-vk" aria-hidden="true"></i> ВКонтакте
              </a>

              <a class="btn btn-default" href="{{ url('auth/github') }}">
                <i class="fa fa-github" aria-hidden="true"></i> GitHub
              </a>

              <a class="btn btn-default" href="{{ url('auth/facebook') }}">
                <i class="fa fa-facebook" aria-hidden="true"></i> Facebook
              </a>

              <a class="btn btn-default" href="{{ url('auth/yandex') }}">
                <i class="fa fa-yahoo" aria-hidden="true"></i> Яндекс
              </a>

              <a class="btn btn-default" href="{{ url('auth/mail') }}">
                <i class="fa fa-at" aria-hidden="true"></i> Mail.RU
              </a>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

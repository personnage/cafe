@extends('layouts.application')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"><h2>Вход</h2></div>
        <div class="panel-body">
          <form method="POST" action="{{ url('/login') }}" role="form" class="form-horizontal loginBlock__form">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Email</label>

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
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="remember"> Запомнить меня
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-orange">Вход</button>

                <a class="dashed" href="{{ url('password/reset') }}">Забыли пароль?</a>
              </div>
            </div>
          </form>

          <hr>
          <div class="col-md-9 col-md-offset-3">
            <div class="btn-group btn-group-sm loginBlock__social" role="group" aria-label="Socialite">
              {{--<a class="btn btn-default" href="{{ url('auth/github') }}">GitHub</a>--}}
              <a class="btn btn-default vk" disabled href="">ВКонтакте</a>
              <a class="btn btn-default fb" disabled href="{{ url('auth/facebook') }}">Facebook</a>

              <a class="btn btn-default ya" disabled href="">Яндекс</a>
              <a class="btn btn-default mru" disabled href="">MailRu</a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

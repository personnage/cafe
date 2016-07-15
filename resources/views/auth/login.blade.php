@extends('layouts.application')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
          <form method="POST" action="{{ url('/login') }}" role="form" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Email address</label>

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
              <label for="password" class="col-md-4 control-label">Password</label>

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
                    <input type="checkbox" name="remember"> Remember Me
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-success">Login</button>

                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
              </div>
            </div>
          </form>

          <hr>
          <div class="col-md-6 col-md-offset-4">
            <div class="btn-group btn-group-sm" role="group" aria-label="Socialite">
              <a class="btn btn-default" href="{{ url('auth/github') }}">GitHub</a>
              <a class="btn btn-info" disabled href="{{ url('auth/twitter') }}">Twitter</a>
              <a class="btn btn-primary" disabled href="{{ url('auth/facebook') }}">Facebook</a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

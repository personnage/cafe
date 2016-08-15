<form method="post" action="{{ url("profile/" . $profile->id . "/edit/password") }}">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <div class="row">
        <div class="col-sm-3 hidden-xs">
            <h4>
                Изменить пароль
            </h4>
            <p>
                После успешного изменения пароля, вы будете перенаправлены на страницу своего аккаунта.
            </p>
        </div>
        <div class="col-sm-9 col-xs-12">
            <div class="form-group">
                <label class="label-light" for="current_pass">Текущий пароль</label>
                <input class="form-control" required="required" type="password" value="" name="current_pass" id="current_pass">

                @if ($errors->has('current_pass'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('current_pass') }}</strong>
                    </span>
                @endif

                @if(session('error'))
                    <span class="text-danger help-block">
                        {{ session('error') }}
                    </span>
                @endif
            </div>
            <hr>
            <div class="form-group">
                <label class="label-light" for="new_pass">Новый пароль</label>
                <input class="form-control" required="required" type="password" value="" name="new_pass" id="new_pass">

                @if ($errors->has('new_pass'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('current_pass') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label class="label-light" for="confirm_pass">Повторить пароль</label>
                <input class="form-control" required="required" type="password" value="" name="confirm_pass" id="confirm_pass">

                @if ($errors->has('confirm_pass'))
                    <span class="help-block text-danger">
                        <strong>{{ $errors->first('current_pass') }}</strong>
                    </span>
                @endif

                @if(session('error_pass'))
                    <span class="text-danger help-block">
                        {{ session('error_pass') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <input type="submit" name="commit" value="Обновить" class="btn btn-orange">
            </div>
        </div>
    </div>
</form>

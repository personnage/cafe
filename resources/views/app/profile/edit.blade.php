@extends('layouts.application')

@section('content')

    <div class="col-xs-12">

        <div class="row">
            <div class="col-xs-12 std-block userInfo">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs userInfo__tabs" role="tablist">
                    <li role="presentation"@if(Route::is('profile.edit')) class="active"@endif><a href="{{ url("profile/" . $profile->id . "/edit") }}">Профиль</a></li>
                    <li role="presentation"@if(Route::is('profile.edit.password')) class="active"@endif><a href="{{ url("profile/" . $profile->id . "/edit/password") }}">Пароль</a></li>
                    <li role="presentation"@if(Route::is('profile.edit.notice')) class="active"@endif><a href="{{ url("profile/" . $profile->id . "/edit/notice") }}">Уведомления</a></li>
                    <li role="presentation"@if(Route::is('profile.edit.account')) class="active"@endif><a href="{{ url("profile/" . $profile->id . "/edit/account") }}">Аккаунт</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content userInfo__content">
                    @if(session('notice'))
                        <div class="alert alert-dismissible alert-success col-xs-12">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <div>
                                <i class="fa fa-info-circle pull-left" aria-hidden="true"></i>
                                <p>{{ session('notice') }}</p>
                            </div>
                        </div>
                    @endif
                    <div role="tabpanel" class="tab-pane @if(Route::is('profile.edit')) active @endif" id="profile">
                        <div class="col-sm-12">
                            @include('app.profile._profile_settings')
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane @if(Route::is('profile.edit.password')) active @endif" id="pass">
                        <div class="col-sm-12">
                            @include('app.profile._password_settings')
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane @if(Route::is('profile.edit.notice')) active @endif" id="notifications">
                        <div class="col-sm-12">
                            @include('app.profile._notification')
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane @if(Route::is('profile.edit.account')) active @endif" id="accoint">
                        <div class="col-sm-12">
                            @include('app.profile._account')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
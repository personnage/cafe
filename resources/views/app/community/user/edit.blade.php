@extends('layouts.application')

@section('content')

    <div class="col-md-9 col-xs-12">

        <div class="row">
            <div class="col-xs-12 std-block userInfo">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs userInfo__tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Профиль</a></li>
                    <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Пароль</a></li>
                    <li role="presentation"><a href="#notifications" aria-controls="notifications" role="tab" data-toggle="tab">Уведомления</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content userInfo__content">
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <div class="col-sm-12">
                            @include('app.community.user._profile_settings')

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="reviews">
                        <div class="col-sm-12">
                            <h4>Изменить пароль</h4>
                            @include('app.community.user._password_settings')
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="notifications">
                        <div class="col-sm-12">
                            <form method="post" action="">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <label class="label-light" for="notifications">
                                            <input type="checkbox" value="" name="notifications" id="notifications">
                                                Согласен(на) на получение уведомлений
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden-sm hidden-xs">
        @include('app.community.user._sidebar')
    </div>

@endsection
@extends('layouts.application')

@section('content')

    @include('app.profile._sidebar')
    <div class="col-sm-9 col-xs-12">

        <div class="">
            <div class="col-xs-12 std-block userInfo">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs userInfo__tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">О себе</a></li>
                    <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Отзывы <span class="badge">15</span></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content userInfo__content">
                    <div role="tabpanel" class="tab-pane active" id="profile">
                        <div class="col-sm-12">

                            <h4>О себе</h4>
                            @if($profile->bio)
                                {{ $profile->bio }}
                            @else
                                Пользователь не указал ничего о себе
                            @endif
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="reviews">
                        @include('app.profile._reviews')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
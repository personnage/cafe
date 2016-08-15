<div class="aside col-sm-3 col-xs-12 pull-right">
        <div class="sideBlock profile col-sm-12">
            <div class="row">
                <div class="profile__head col-sm-12">
                    <div class="row">
                        @if(Auth::id() === $profile->id)
                            <span class="label label-orange">Это вы</span>
                        @endif
                        <div class="col-sm-4 bonuses">
                            <span>98433</span>
                        </div>
                        <div class="col-md-8 col-sm-7 col-xs-8 pull-right">
                            <img class="img-responsive img-circle" src="{{ Gravatar::src($profile->email, 200) }}">
                        </div>
                    </div>
                </div>
                <div class="profile__info col-sm-12">
                    <p><i class="fa fa-user" aria-hidden="true"></i>{{ $profile->name }}</p>
                    @if($city)
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $city[0]->name }}</p>
                    @endif

                    @if($profile->facebook)
                        <p><i class="fa fa-facebook" aria-hidden="true"></i>
                            <a href="{{ $profile->facebook }}" target="_blank">{!! str_replace('https://www.facebook.com/', '', $profile->facebook) !!}</a>
                        </p>
                    @endif

                    @if ($profile->skype)
                        <p><i class="fa fa-skype" aria-hidden="true"></i>{{ $profile->skype }}</p>
                    @endif

                </div>
                @if(Auth::id() === $profile->id)
                    <div class="profile__tail text-center col-sm-12">
                        <a class="btn btn-orange" href="{{ url("profile/" . $profile->id ."/edit") }}">Редактировать</a>
                    </div>
                @endif
            </div>
        </div>
</div>

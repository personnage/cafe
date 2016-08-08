<div class="aside col-sm-3 col-xs-12 pull-right">
        <div class="sideBlock profile col-sm-12">
            <div class="row">
                <div class="profile__head col-sm-12">
                    <div class="row">
                        @if(Auth::id() === $user->id)
                            <span class="label label-orange">Это вы</span>
                        @endif
                        <div class="col-sm-4 bonuses">
                            <span>98433</span>
                        </div>
                        <div class="col-md-8 col-sm-7 col-xs-8 pull-right">
                            <img class="img-responsive img-circle" src="{{ Gravatar::src($user->email, 200) }}">
                        </div>
                    </div>
                </div>
                <div class="profile__info col-sm-12">
                    <p><i class="fa fa-user" aria-hidden="true"></i>{{ $user->name }}</p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Санкт-Петербург</p>
                    <p><i class="fa fa-facebook" aria-hidden="true"></i><a
                                href="https://www.facebook.com/polina.kasatkina.1" target="_blank">polina.kasatkina.1</a>
                    </p>
                    <p><i class="fa fa-skype" aria-hidden="true"></i>skype_login</p>
                </div>
                @if(Auth::id() === $user->id)
                    <div class="profile__tail text-center col-sm-12">
                        <a class="btn btn-orange" href="{{ url("community/user/" . $user->id ."/edit") }}">Редактировать</a>
                    </div>
                @endif
            </div>
        </div>
</div>

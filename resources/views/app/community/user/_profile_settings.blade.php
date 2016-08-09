<form method="post" enctype="multipart/form-data" action="">
    <div class="row">
        <div class="col-sm-3 hidden-xs">
            <h4>
                Аватар
            </h4>
            <p>
                Вы можете загрузить аватар здесь
                или изменить его на сайте <a href="http://gravatar.com">gravatar.com</a>
            </p>
        </div>
        <div class="col-sm-9 col-xs-12">
            <div class="col-sm-3">
                <img alt="" class="img-responsive img-circle" src="{{ Gravatar::src($user->email, 150) }}">
            </div>
            <div class="col-sm-9">
                <h5>
                    Загрузить аватар
                </h5>
                <div>
                    <input type="file" name="avatar"/>
                </div>
                <div class="help-block">
                    Максимальный размер файла 200KB.
                </div>
            </div>

        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-sm-3 hidden-xs">
            <h4 class="prepend-top-0">
                Основные настройки
            </h4>
            <p>
                Это информация будет отображена на странице вашего профиля.
            </p>
        </div>
        <div class="col-sm-9 col-xs-12">
            <div class="form-group">
                <label class="label-light" for="user_name">Имя</label>
                <input class="form-control" required="required" type="text" value="{{ $user->name }}" name="name" id="user_name">
                <span class="help-block">Введите ваше имя, чтобы другие пользователи знали, как к вам обращаться</span>
            </div>
            <div class="form-group">
                <label class="label-light" for="user_email">Email</label>
                <input class="form-control" required="required" type="text" value="{{ $user->email }}" name="email" id="user_email">
                <span class="help-block">Ваш основной email для авторизации. Также используется для генерации аватара, если он не загружен</span>
            </div>
            <div class="form-group">
                <label class="label-light" for="user_public_email">Email для уведомлений</label>
                <input class="form-control" id="user_public_email" name="public_email" value="{{ $user->notification_email }}"/>
                <span class="help-block">На этот email будут присылаться уведомления</span>
            </div>
            <div class="form-group">
                <label class="label-light" for="city">Ваш город</label>
                <select class="form-control" name="city" id="city">
                    <option value="" selected>Выберите свой город</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>
            <hr>
            <div class="form-group">
                <label class="label-light" for="user_skype">Skype</label>
                <input class="form-control" type="text" value="" name="skype" id="user_skype">
            </div>
            <div class="form-group">
                <label class="label-light" for="user_facebook">Facebook</label>
                <input class="form-control" type="text" value="" name="facebook" id="user_facebook">
                <span class="help-block">ссылка на ваш профиль в Facebook</span>
            </div>
            <div class="form-group">
                <label class="label-light" for="user_bio">О себе</label>
                <textarea rows="4" class="form-control" maxlength="250" name="bio" id="user_bio">{{ $user->bio }}</textarea>
                <span class="help-block">Расскажите немного о себе</span>
            </div>
            <div class="form-group">
                <input type="submit" name="commit" value="Обновить" class="btn btn-orange">
            </div>
        </div>
    </div>
</form>

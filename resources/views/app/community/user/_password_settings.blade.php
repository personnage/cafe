<form method="post" action="">
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
                <input class="form-control" required="required" type="text" value="" name="current_pass" id="current_pass">
            </div>
            <hr>
            <div class="form-group">
                <label class="label-light" for="new_pass">Новый пароль</label>
                <input class="form-control" required="required" type="text" value="" name="new_pass" id="new_pass">
            </div>
            <div class="form-group">
                <label class="label-light" for="confirm_pass">Повторить пароль</label>
                <input class="form-control" required="required" type="text" value="" name="confirm_pass" id="confirm_pass">
            </div>
            <div class="form-group">
                <input type="submit" name="commit" value="Обновить" class="btn btn-orange">
            </div>
        </div>
    </div>
</form>

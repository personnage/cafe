<div class="col-sm-3 hidden-xs">
    <h4>
        Удалить аккаунт
    </h4>
</div>
<div class="col-sm-9 col-xs-12">
    <form method="post" action="{{ url("profile/" . $profile->id . "/edit/account") }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <input type="submit" name="commit" value="Удалить" class="btn btn-lg btn-danger">
                </div>
            </div>
        </div>
    </form>
</div>
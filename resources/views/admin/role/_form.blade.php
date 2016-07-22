@include('admin.shared._alert')

<form method="POST" action="{{ url('admin/role', $role->id) }}" role="form" class="form-horizontal" accept-charset="utf-8" autocomplete="off">
  {{ csrf_field() }}

  @if($role->exists)
  {{ method_field('PATCH') }}
  @endif

  <fieldset>
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <label for="name" class="col-sm-2 control-label">Name</label>
      <div class="col-sm-10">
        <input type="text" name="name" value="{{ old('name', $role->name) }}" id="name" class="form-control" placeholder="Role name in lowercase" autocomplete="off" required>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>
    </div>

    <div class="form-group{{ $errors->has('label') ? ' has-error' : '' }}">
      <label for="label" class="col-sm-2 control-label">Label</label>
      <div class="col-sm-10">
        <input type="text" name="label" value="{{ old('label', $role->label) }}" id="label" class="form-control" placeholder="A small description" autocomplete="off" required>
        @if ($errors->has('label'))
            <span class="help-block">
                <strong>{{ $errors->first('label') }}</strong>
            </span>
        @endif
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-2 control-label">Permissions</label>
      <div class="col-sm-10">
        <div class="grid grid-toggle">
          @foreach($permissions as $permission)
            <input type="checkbox" name="permissions[{{ $permission->id }}]" id="{{ $permission->name }}"
              @if(old('permissions.'.$permission->id) or $role->hasPermission($permission->name))
                checked
              @endif
            >
            <label for="{{ $permission->name }}" class="grid-item grid-colorize">
              <h4 class="text-muted">{{ $permission->name }}</h4>
              <p data-toggle="tooltip" data-placement="left" title="{{ $permission->label }}">{{ $permission->label }}</p>
            </label>
          @endforeach
        </div>
      </div>
    </div>

  </fieldset>

  <div class="form-group">
    @if($role->exists)
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-default">Save changes</button>
      </div>
    @else
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-default">Create role</button>
      </div>
    @endif

    <div class="col-sm-offset-2 col-sm-4">
      <a href="{{ url('admin/role') }}" class="btn btn-default">Cancel</a>
    </div>
  </div>
</form>
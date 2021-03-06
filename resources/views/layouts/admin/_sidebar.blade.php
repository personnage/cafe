<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    @foreach([
        'admin'            => 'Overview',
        'admin/user'       => 'Users',
        'admin/role'       => 'Roles',
        'admin/permission' => 'Permissions'] as $path => $name)
    <li @if(url($path) === url()->current()) class="active" @endif>
      <a href="{{ url($path) }}">{{ $name }}</a>
    </li>
    @endforeach
  </ul>
</div>

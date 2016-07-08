<!DOCTYPE html>
<html lang="en">
  @include('layouts.admin._head')

  <body>
    @include('layouts.admin._nav')

    <div class="container-fluid">
      <div class="row">
        @include('layouts.admin._sidebar')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          @yield('content')
        </div>
      </div>
    </div>

    <script src="{{ elixir('assets/js/admin/vendor.js') }}"></script>
    <script src="{{ elixir('assets/js/admin/app.js') }}"></script>

    @if(config('app.env') === 'local')
      @include('layouts.admin._bootlint')
    @endif

    @stack('scripts')
  </body>
</html>

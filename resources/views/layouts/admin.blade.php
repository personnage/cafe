<!DOCTYPE html>
<html lang="en">
  @include('layouts.admin._head')

  <body>
    @include('layouts.admin._nav')

    <div class="container-fluid">
      <div class="row">

        @hasSection('sidebar')
            @yield('sidebar')
        @else
            @include('layouts.admin._sidebar')
        @endif

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          @yield('content')
        </div>
      </div>
    </div>

    <script src="{{ elixir('assets/js/admin/lib.js') }}"></script>
    <script src="{{ elixir('assets/js/admin/bootstrap-pkg.js') }}"></script>
    <script src="{{ elixir('assets/js/admin/selectize.js') }}"></script>

    {{-- Note! This unit should not depend on "app.js" file! --}}
    @stack('scripts')

    <script src="{{ elixir('assets/js/admin/app.js') }}"></script>

    @if(config('app.env') === 'local')
      @include('layouts.admin._bootlint')
    @endif
  </body>
</html>

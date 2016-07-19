<!DOCTYPE html>
<html lang="en">
  @include('layouts.application._head')

  <body>
    @include('layouts.application._header')

    @section('menu')
    @include('layouts.application._menu')
    @show

    <div class="container">
      <div class="row">
        @yield('content')
      </div>
    </div>

    @include('layouts.application._footer')

    <script src="{{ elixir('assets/js/app/lib.js') }}"></script>
    <script src="{{ elixir('assets/js/admin/bootstrap-pkg.js') }}"></script>
    <script src="{{ elixir('assets/js/app/app.js') }}"></script>

    @if(config('app.env') === 'local')
      @include('layouts.application._bootlint')
    @endif

    @stack('scripts')
  </body>
</html>

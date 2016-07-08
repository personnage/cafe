<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('admin') }}">Dashboard</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">

        <li>
          <a href="{{ url('admin') }}"><i class="material-icons">dashboard</i></a>
        </li>

        <li>
          <a href="#/settings"><i class="material-icons">settings</i></a>
        </li>

        <li>
          <a href="#/profile"><i class="material-icons">person_outline</i></a>
        </li>

        <li>
          <a href="#/help"><i class="material-icons">help_outline</i></a>
        </li>

        <li>
          <a href="{{ url('logout') }}"><i class="material-icons">exit_to_app</i></a>
        </li>

      </ul>
      <form method="GET" action="#/search" class="navbar-form navbar-right">
        <input type="text" class="form-control" placeholder="Search...">
      </form>
    </div>
  </div>
</nav>

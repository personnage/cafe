<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>
    @hasSection('title')
        Dashboard: @yield('title')
    @else
        Dashboard
    @endif
  </title>
  <meta name="description" content="@yield('description')">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  @stack('meta-tags')

  <link href='https://fonts.googleapis.com/css?family=Scada:400,700,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">

  <link rel="stylesheet" href="{{ elixir('assets/css/admin/bootstrap-pkg.css') }}">
  <link rel="stylesheet" href="{{ elixir('assets/css/admin/app.css') }}">

  @stack('styles')

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

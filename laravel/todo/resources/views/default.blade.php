<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="{{{ asset('/css/vendor/bootstrap.min.css') }}}"/>
    <link rel="stylesheet" href="{{{ asset('/css/style.css') }}}"/>
    @yield('style')
    <title>Welkom</title>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-static-top">
      <a class="navbar-brand" href="/">Todo</a>
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/todo">Todo's <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </nav>
    <div class="clearfix"></div>
    @yield('content')
    <div class="footer">
      Copyright, <a href="http://www.webmagico.be/">Webmagico
    </div>
    @yield('scripts')
  </body>
</html>

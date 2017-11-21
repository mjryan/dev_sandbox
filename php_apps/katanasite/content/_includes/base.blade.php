<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="@yield('pageDescription')">
    <title>{{$sitename}} @yield('pageTitle')</title>
    <link rel="stylesheet" href="@url('assets/css/bootstrap.min.css')">
    <link rel="stylesheet" href="@url('assets/css/all.css')">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-inverse bg-primary">
      <a class="navbar-brand" href="{{$sitename}}"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="@url('/')">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="@url('blog')">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="@url('about')">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="@url('contact')">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 mt-4">
          @yield('body')
        </div>
        <div class="col-md-4 col-sm-4 mt-4">
          @include('_includes.sidebar')
        </div>
      </div>

    </div>
  </body>
</html>

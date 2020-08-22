<!DOCTYPE HTML>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    @include('inc.header') <!-- подключение файла с шапкой сайта -->

    @if(Request::is('/')) <!-- Условие. Если это главная страница, то отображать ('inc.hero') -->
      @include('inc.hero')
    @endif

    <div class="container mt-5">
      <div class="row">
        <div class="col-8">
          @yield('content')
        </div>
        <div class="col-4">
          @include('inc.aside') <!-- подключение файла с боковой панелью -->
        </div>
      </div>
    </div>
    @include('inc.footer') <!-- подключение файла fooper - (информация внизу страницы) -->
  </body>
</html>

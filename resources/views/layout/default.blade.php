<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=ù, initial-scale=1.0">
  <title>@yield('page_title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  @yield('header_scripts')
</head>
<body>
  @include('partials.header')

  <div class="container">
    @yield('content')
  </div>

  @include('partials.footer')
</body>
</html>
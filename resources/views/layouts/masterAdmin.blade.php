<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    @include('partials.head')
    <title>@yield('title')</title>
  </head>
  <body>
    <div class="">
      <!-- header -->
      @include('partials.Adminnavbar')
      <!-- header -->
    </div>

    <div class="">
    <!-- main content -->
    @yield('content')
    <!-- main content -->
    </div>

  </body>
</html>

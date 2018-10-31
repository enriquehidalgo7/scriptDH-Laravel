<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    @include('partials.head')
    <title>@yield('title')</title>
  </head>
  <body>
    <!-- header -->
    @include('partials.header')
    <!-- header -->

    <!-- main content -->
    @yield('content')
    <!-- main content -->

    <!-- footer -->
    @include('partials.footer')
    <!-- footer -->
  </body>
</html>

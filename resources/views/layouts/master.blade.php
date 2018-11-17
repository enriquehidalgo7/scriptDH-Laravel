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
      @include('partials.header')
      <!-- header -->
    </div>


    <!-- main content -->
    @yield('content')
    <!-- main content -->

    <div class="">
    <!-- footer -->
    @include('partials.footer')
    <!-- footer -->
    </div>
  </body>
</html>

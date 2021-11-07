<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <style>
      body {
          position: relative; 
      }
      .kev{
        color: black;
      }
      label{
        color: black;
      }
      </style>
  </head>
  <body class="container bg-secondary text-white">
    @include("layout.navigation")
      <div class="container pt-5">
          
        @yield('main_content')

      </div>
  </body>
</html>
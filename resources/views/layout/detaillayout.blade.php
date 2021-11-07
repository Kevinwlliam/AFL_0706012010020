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
      h3{
          color: black;
      }
      .text{
          text-align: center;
      }
      </style>
  </head>
  <body class="container bg-secondary text-white">
    @include("layout.detailnavigation")
      <div class="container pt-5">
          
        @yield('main_content')

      </div>
  </body>
</html>
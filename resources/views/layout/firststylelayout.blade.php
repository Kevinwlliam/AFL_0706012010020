<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <style>
      body {
          position: relative;
      }
      h2{
          color:black;
      }
      h3{
          color: black;
      }
      .colorp{
          color: black;
      }
      .fakeimg {
        height: 200px;
        background: #aaa;
        }
        a{
            color: white;
        }
      </style>
  </head>
  <body class="container bg-secondary text-white">
    @include("layout.secnavigation")
      <div class="container pt-5">
          
        @yield('main_content')

      </div>
  </body>
</html>
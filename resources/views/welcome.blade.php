

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>KindHub Elementry School</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <!-- Styles -->
      <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
      <style>
         html, body {
         color: #636b6f;
         font-family: 'Nunito', sans-serif;
         font-weight: 200;
         height: 100vh;
         margin: 0;
         }
         .full-height {
         height: 100vh;
         }
         .flex-center {
         align-items: center;
         display: flex;
         justify-content: center;
         }
         .position-ref {
         position: relative;
         }
         .top-right {
         position: absolute;
         right: 10px;
         top: 18px;
         }
         .content {
         text-align: center;
         }
         .title {
         font-size: 80px;
         color: black;
         text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;
         }
         .links > a {
         color: #0000FF;
         padding: 0 30px;
         font-size: 25px;
         font-weight: 800;
         letter-spacing: .1rem;
         text-decoration: none;
         text-transform: uppercase;
         }
         .m-b-md {
         margin-bottom: 30px;
         }
         .links > a:hover{
         font-size: 30px;
         color: black;
         text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #49ff18, 0 0 30px #49FF18, 0 0 40px #49FF18, 0 0 55px #49FF18, 0 0 75px #49ff18;
         }
      </style>
   </head>
   <body id="home">
      <div class="flex-center position-ref full-height">
         @if (Route::has('login'))
         <div class="top-right links ">
            @auth
            <a href="{{ url('/khes/assign-student') }}" >DashBoard</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
         </div>
         @endif
         <div class="content ">
            <div class="title m-b-md ">
               Welcome To<br/> KindHub Elementry School</b>
               Management System
            </div>
         </div>
      </div>
   </body>
</html>


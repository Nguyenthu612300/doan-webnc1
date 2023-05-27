<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('title')</title>
   <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/css/cart.css')}}">
   <link rel="stylesheet" href="{{asset('frontend/css/home.css')}}">
  
</head>
<body>
   @include('layouts.inc.navbar')
   <div style="margin-top: 20px">
      @yield('content')
   </div>
   <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
</body>
</html>
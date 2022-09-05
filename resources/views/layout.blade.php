<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>M_lara</title>

    <link href="{{ asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/css/ionicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bracket.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>

  <body>
    <nav class="flex justify-between items-center mb-4">
      <a href="home"><img class="w-24" src="images/logo.png" alt="" class="logo" /></a>
      <ul class="flex space-x-6 mr-6 text-lg">
          <li>
              <a href="register.html" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
          </li>
          <li>
              <a href="login.html" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                  Login</a>
          </li>
      </ul>
    </nav>

@include('flash-message')
@yield('main')
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/jquery.peity.min.js') }}"></script>

    <script src="{{ asset('js/bracket.js') }}"></script>
  </body>

</html>

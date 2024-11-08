<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('auth-assets/fonts/icomoon/style.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('auth-assets/css/bootstrap.min.css') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('auth-assets/css/style.css') }}">
    <title>Login Page</title>
  </head>
  <body>
  
    <main>
        @yield('content')
    </main>
  
    <script src="{{ asset('auth-assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('auth-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('auth-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('auth-assets/js/main.js') }}"></script>
  </body>
</html>
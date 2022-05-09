<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('style')
    <title>@yield('title-block')</title>
</head>
<body>
    @include('includes.header')
    @yield('content')
    @include('includes.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="/scripts/script.js"></script>
    <script src="https://kit.fontawesome.com/74fb05f4c1.js" crossorigin="anonymous"></script>
</body>
</html>

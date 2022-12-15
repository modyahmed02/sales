<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


    <title>@yield('title')</title>
</head>
<body>


    @yield('content')
    <footer style="margin-top: 30%">
        <p class="text-center">this is my foter</p>
    </footer>
    <script src="{{ asset('js/jquery-3.6.2.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('script')
</body>
</html>
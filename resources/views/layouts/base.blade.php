<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    @section('head')
        <link rel="stylesheet" href="/css/style.css">
    @show
</head>
<body>
    @include('header')
    @yield('body')
    @include('footer')
</body>
</html>

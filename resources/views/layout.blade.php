<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href=" {{ mix('/css/app.css') }} ">
    <script src=" {{ mix('/js/app.js') }} " defer></script>
    <style>
        
    </style>
</head>
<body>
    <h1>Proyecto de Laravel</h1>
    
    @include('partials.nav')

    @include('partials.session-status')

    @yield('content')
</body>
</html>
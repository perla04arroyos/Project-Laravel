<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href=" {{ mix('/css/app.css') }} ">
    <script src=" {{ mix('/js/app.js') }} " defer></script>
</head>
<body>
    @include('partials.nav')

    @include('partials.session-status')

    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>@yield('header')</h1>
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <style>
        .title-style {
            margin-top: 50%;
            font-size: 30px;
            font-weight: 500;
        }

        .btn-style-card {
            margin-top: 45%;
        }
    </style>
    @vite('resources/sass/app.scss')
</head>

<body> {{-- class="custom-bg" --}}

    @include('layouts.main.header')

    {{-- ini  nvigation 2 --}}
    @yield('navigation2')

    <div class="containter">
        {{-- ini content --}}
        @yield('content')

        @include('layouts.main.footer')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    @vite('resources/js/app.js')
</body>

</html>

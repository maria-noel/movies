<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Movies') }} </title>

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.header')
    <div id="app">

        <section class="section">
            <div class="container">
                <h1 class="title">
                    @yield('section-title')
                </h1>
                <p class="is-large">
                    @yield('content')
                </p>
            </div>
        </section>

    </div>
    @include('partials.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Movies') }} {{ app()->version() }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar has-shadow">
            <div class="container">
                <div class="navbar-brand">
                    <a href="{{ url('/') }}" class="navbar-item">{{ config('app.name', 'Movies') }}</a>

                    <div class="navbar-burger burger" data-target="navMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div class="navbar-menu" id="navMenu">
                    <div class="navbar-start"></div>

                    <div class="navbar-end">
                        <div class="navbar-item has-dropdown is-hoverable">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        
        
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
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
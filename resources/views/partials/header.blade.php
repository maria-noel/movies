<!-- START NAV --> 
<nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="../">
                {{ config('app.name') }}
                        </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                <span></span>
                <span></span>
                </span>
            </div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item is-active">
                                Home
                            </a>
                    <a href="movies" class="navbar-item">Movies</a>
                    <a href="actors" class="navbar-item">Actors</a>

                    @if (Route::has('login'))
                        <div class="navbar-item has-dropdown is-hoverable">
                            @if (Auth::check())
                                <a href="{{ url('/home') }}" class="navbar-link">Home</a>
                            @else
                                <div class="navbar-dropdown">
                                    <a href="{{ url('/login') }}" class="navbar-link">Login</a>
                                    <a href="{{ url('/register') }}" class="navbar-link">Register</a> 
                                    <div class="navbar-item">
                                        Logout
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->

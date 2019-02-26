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
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="movies" class="navbar-item">Movies</a>
                            <a href="actors" class="navbar-item">Actors</a>

                            @if (Route::has('login'))
                            @if (Auth::check())
                            <a href="{{ url('/home') }}" class="navbar-item">Home</a>
                        <a href=" {{ url('/logout') }}" class="navbar-item">
                                Logout
                        </a>
                            @else
                                <div class="navbar-item has-dropdown">
                                    <a href="{{ url('/login') }}" class="navbar-item">Login</a>
                                    <a href="{{ url('/register') }}" class="navbar-item">Register</a> 
                                </div>
                            @endif
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->

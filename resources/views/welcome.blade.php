<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cards.css' ) }}">



</head>

<body>

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


    <div class="container">
        <div id="flow">
            <span class="flow-1"></span>
            <span class="flow-2"></span>
            <span class="flow-3"></span>
        </div>
        <div class="section">
            <div class="box">
                <div class="field has-addons">
                    <div class="control is-expanded">
                        <input class="input has-text-centered" type="search" placeholder="» » » » » » find me « « « « « «">
                    </div>
                    <div class="control">
                        <a class="button is-info">Search</a>
                    </div>
                </div>
            </div>
            <!-- Developers -->
            <div class="row columns">
                <div class="column is-one-third">
                    <div class="card large">
                        <div class="card-image">
                            <figure class="image">
                                <img src="https://images.unsplash.com/photo-1475778057357-d35f37fa89dd?dpr=1&auto=compress,format&fit=crop&w=1920&h=&q=80&cs=tinysrgb&crop="
                                    alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-96x96">
                                        <img src="https://i.imgsafe.org/a4/a4bb9acc5e.jpeg" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">Okinami</p>
                                    <p><span class="title is-6"><a href="http://twitter.com/#">@twitterid</a></span></p>
                                    <p class="subtitle is-6">Lead Developer</p>
                                </div>
                            </div>
                            <div class="content">
                                The Beast stumbled in the dark for it could no longer see the path. It started to fracture and weaken, trying to reshape
                                itself into the form of metal. Even the witches would no longer lay eyes upon it, for it
                                had become hideous and twisted.
                                <div class="background-icon"><span class="icon-twitter"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="card large">
                        <div class="card-image">
                            <figure class="image">
                                <img src="https://source.unsplash.com/uzDLtlPY8kQ" alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-96x96">
                                        <img src="https://cdn.discordapp.com/avatars/244932903530659841/0c924a19fcf1b5c59bc9dc1b58b61bb0.jpg?size=1024" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">McSocks</p>
                                    <p><span class="title is-6"><a href="http://twitter.com/#">@twitterid</a></span></p>
                                    <p class="subtitle is-6">Developer</p>
                                </div>
                            </div>
                            <div class="content">
                                The soul of the Beast seemed lost forever. Then, by the full moon's light, a child was born; child with the unbridled soul
                                of the Beast that would make all others pale in comparison.
                                <div class="background-icon"><span class="icon-facebook"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="card large">
                        <div class="card-image">
                            <figure class="image">
                                <img src="https://source.unsplash.com/pe_R74hldW4" alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-96x96">
                                        <img src="https://i.imgsafe.org/a5/a5e978ce20.jpeg" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">The Conceptionist</p>
                                    <p><span class="title is-6"><a href="http://twitter.com/#">@twitterid</a></span></p>
                                    <p class="subtitle is-6">Developer</p>
                                </div>
                            </div>
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum consequatur numquam aliquam tenetur ad amet inventore hic
                                beatae, quas accusantium perferendis sapiente explicabo, corporis totam! Labore reprehenderit
                                beatae magnam animi!
                                <div class="background-icon"><span class="icon-barcode"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Developers -->

            <!-- Staff -->
            <div class="row columns is-multiline">
                <div class="column is-one-third">
                    <div class="card large round">
                        <div class="card-image ">
                            <figure class="image">
                                <img src="https://source.unsplash.com/Jy6luiLBsrk" alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-96x96">
                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/profile-sample5.jpg" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">Atsui</p>
                                    <p><span class="title is-6"><a href="http://twitter.com/#">@twitterid</a></span></p>
                                    <p class="subtitle is-6">Moderator</p>
                                </div>
                            </div>
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum consequatur numquam aliquam tenetur ad amet inventore hic
                                beatae, quas accusantium perferendis sapiente explicabo, corporis totam! Labore reprehenderit
                                beatae magnam animi!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="card large">
                        <div class="card-image">
                            <figure class="image">
                                <img src="https://source.unsplash.com//i1CR3CY2hE4" alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-96x96">
                                        <img src='http://www.radfaces.com/images/avatars/richard-wang.jpg' alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">Sphirou Sapphirou</p>
                                    <p><span class="title is-6"><a href="http://twitter.com/#">@twitterid</a></span></p>
                                    <p class="subtitle is-6">Moderator</p>
                                </div>
                            </div>
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum consequatur numquam aliquam tenetur ad amet inventore hic
                                beatae, quas accusantium perferendis sapiente explicabo, corporis totam! Labore reprehenderit
                                beatae magnam animi!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="card large">
                        <div class="card-image">
                            <figure class="image">
                                <img src="https://source.unsplash.com/b6VzeoRZiS0" alt="Image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-96x96">
                                        <img src='http://www.radfaces.com/images/avatars/jeffrey-douglas.jpg' alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">PlayTheFallen</p>
                                    <p><span class="title is-6"><a href="http://twitter.com/#">@twitterid</a></span></p>
                                    <p class="subtitle is-6">Moderator</p>
                                </div>
                            </div>
                            <div class="content">
                                Sometimes I dip my nose into my cereals. I do it coz it's funny.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Staff -->
            </div>
        </div>

        {{-- footer --}}
        <footer class="footer">
            <div class="container">
                <div class="content has-text-centered">
                    <div class="soc">
                        <a href="#"><i class="fa fa-github-alt fa-2x" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                    </div>
                    <p>
                        <strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. <br>
                    </p>
                </div>
            </div>
        </footer>

        <script src="/js/app.js"></script>
</body>

</html>
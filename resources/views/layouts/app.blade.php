<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--PlaceHolder CDN Vue e Ajax-->
    @yield('header-scripts')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{--Logo--}}
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo" src="{{ asset('img/db-logo.png') }}" alt="deliveboo logo" srcset="">
                    <div class="deliveboo-logo-text">
                        {{ config('app.name', 'Laravel') }}
                    </div>
                </a>
                {{--End Logo--}}

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                            {{--Button Login--}}
                            <li class="nav-item margin-right">
                                <a class="btn btn-coloured yellow" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            {{--End Button Login--}}

                            {{--Button Register--}}
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-coloured blue" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('braintree-index') }}"><i class="fas fa-shopping-cart"></i></a>
                                
                            </li>
                            {{--End Button Register--}}
                            
                        @else
                            {{--Dropdown--}}
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="dropdown-toggle link-coloured" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right " aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item link-coloured" href="{{ route('admin.dishes.index') }}">Gestisci i tuoi piatti</a>
                                    <a class="dropdown-item link-coloured" href="{{ route('admin.dishes.create') }}">Crea nuovo piatto</a>

                                    <a class="dropdown-item link-coloured yellow" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    
                                </div>
                            </li>
                            {{--End Dropdown--}}
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        {{--Footer--}}
        <footer >
            {{--Newsletter--}}
            <div class="newsletter black-bg">
                <form>
                    <div class="form-group label-text">
                    <label  for="exampleFormControlInput1">Iscriviti alla nostra newsletter</label>
                    <div class="input-btn">
                        <input type="email" class="form-control " id="exampleFormControlInput1" placeholder="Inserisci la tua email">
                        <button class="btn-coloured yellow">Iscriviti</button>
                    </div>
                    
                    </div>
                </form>
            </div>
            {{--End Newsletter--}}
            

            <div class=" black-bg">
                <div class="deliveboo-description footer-links github">
                    <ul>
                        <li>
                            <h5>Deliveboo Team 3</h5>
                            Progetto realizzato dagli studenti della classe 31.
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-github"></i>
                                Enrico Bianco
                            
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-github"></i>
                                Francesca Salvini
                            
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-github"></i>
                                Francesco Nisi
                            
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-github"></i>
                                Ignazio Montebello
                            
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fab fa-github"></i>
                                Veronica Vannini
                            
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer-links">
                    
                    <ul>
                        <li>
                            <h5>Links utili</h5>
                        </li>
                        
                        <li>
                            <a href="">Login</a>
                        </li>
                        <li>
                            <a href="">Registrati</a>
                        </li>
                        <li>
                            <a href="">Ordini</a>
                        </li>
                        <li>
                            <a href="">Blog</a>
                        </li>
                        <li>
                            <a href="">Tracking</a>
                        </li>
                        <li>
                            <a href="">Contatti</a>
                        </li>
                    </ul>
                </div>

                <div class="footer-links social">
                    
                    <ul>
                        <li>
                            <h5>
                                Vieni a trovarci sui nostri social
                            </h5>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                
            </div>

            

            <div class="black-bg privacy-terms">
                <ul>
                    <li>
                        <a href="">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="">Termini e condizioni</a>
                    </li>
                </ul>
                
            </div>

            <div class="black-bg">
                <p>© Copyright 2021. Tutti i diritti sono riservati</p>
            </div>

        </footer>
        {{--End Footer--}}
    </div>
    <!--Javascript Link Placeholder-->
    @yield('js-script')
</body>
</html>

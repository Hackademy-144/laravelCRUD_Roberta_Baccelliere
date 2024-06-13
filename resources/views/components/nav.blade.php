<nav class="navbar navbar-expand-lg bg-body-tertiary bg-black">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="/image/logo.jpg" alt="" height="70px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-lg-0">
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('plans') }}">Piani alimentari</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('article.create') }}">Community</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contattaci</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Il tuo profilo</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('article.index') }}">Carrello, index<i
                                        class="fa-solid fa-cart-shopping"></i></a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            <form method="POST" action="{{ route('logout') }}" class="d-none" id="logout-form">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="text-center">
                                <form method="POST" action="{{ route('user.delete') }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Elimina account</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
        <div style="width:102px"></div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</nav>

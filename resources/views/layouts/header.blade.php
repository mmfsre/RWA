<div class="container d-flex align-items-center">
    <h1 class="logo me-auto"><a href="/">Student share<span>.</span></a></h1>


    <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            <li><a class="nav-link scrollto active" href="/">Početna</a></li>
            <li><a class="nav-link scrollto" href="/about">O nama</a></li>
            <li><a class="nav-link scrollto " href="/materials">Materijali</a></li>
            {{-- <li><a class="nav-link scrollto" href="/team">Tim</a></li> --}}
            <li><a class="nav-link scrollto" href="/contact">Kontakt</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

    <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a style="width:auto;" class="get-started-btn scrollto" class="nav-link"
                        href="{{ route('login') }}">{{ __('Prijava') }}</a>
            @endif

            @if (Route::has('register'))
                <a style="width:auto;" class="get-started-btn scrollto" class="nav-link"
                    href="{{ route('register') }}">{{ __('Registracija') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Odjavi se') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</div>

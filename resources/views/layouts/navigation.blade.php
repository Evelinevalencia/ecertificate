<nav x-data="{ open: false }" class="navbar navbar-expand-lg">
    <!-- Primary Navigation Menu -->
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="./images/logoMatana.png" alt="logoMatana"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav navFlex">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('/')}}">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{URL::to('tentangkami')}}">TENTANG KAMI</a>
                    </li>
                </ul>
                @if (Route::has('login'))
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link border border-dark rounded-3 verifikasiAkun">LOGIN</a>
                    </li>
                </ul>
                @endif
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('dashboard')}}">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('tentangkami')}}">TENTANG KAMI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/template')}}">TEMPLATE</a>
                </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')" class="nav-link border border-dark rounded-3 verifikasiAkun" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('LOG OUT') }}
                            </a>
                        </form>
                    </li>
                </ul>
                @endguest
            </div>
        </div>
    </div>
</nav>
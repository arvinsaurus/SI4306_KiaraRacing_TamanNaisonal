<nav class="navbar navbar-expand-lg navbar-dark px-5 py-4">
        <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/Logo.png') }}" alt="Logo" height="32px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-4 ms-auto">
            <a class="nav-link {{ (request()->is('about*')) ? 'active' : '' }}" href="{{ route('about') }}">Tentang Kami</a>
            <a class="nav-link {{ (request()->is('satwa*')) ? 'active' : '' }}" href="{{ route('satwa') }}">Satwa</a>
            <a class="nav-link {{ (request()->is('donation*')) ? 'active' : '' }}" href="{{ route('donation') }}">Donasi</a>
            <a class="nav-link {{ (request()->is('ticket-booking*')) ? 'active' : '' }}" href="{{ route('ticket-booking') }}">Pesan Tiket</a>
            
            @if (Auth::check())
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-3 d-none d-lg-inline text-gray-600">
                            <strong>
                                {{ Auth::user()->nama }}
                            </strong>
                        </span>
                        <i class="fas fa-user fa-fw"></i>
                    </a>

                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-dark dropdown-menu-right ml-0 shadow animated--grow-in" aria-labelledby="userDropdown">
                    @if (Auth::user()->level == "user")
                        <a class="dropdown-item {{ (request()->is('user/donation-history*')) ? 'fw-bold bg-dark' : '' }}" href="{{ route('user.donation-history') }}">
                            Riwayat Donasi
                        </a>
                        <a class="dropdown-item {{ (request()->is('user/booking-history*')) ? 'fw-bold bg-dark' : '' }}" href="{{ route('user.booking-history') }}">
                            Riwayat Booking
                        </a>
                    @else
                        <a class="dropdown-item {{ (request()->is('admin/donation*')) ? 'fw-bold bg-dark' : '' }}" href="{{ route('admin.donation') }}">
                            Data Donasi
                        </a>
                        <a class="dropdown-item {{ (request()->is('admin/booking*')) ? 'fw-bold bg-dark' : '' }}" href="{{ route('admin.booking') }}">
                            Data Booking
                        </a>
                        <a class="dropdown-item {{ (request()->is('admin/news*')) ? 'fw-bold bg-dark' : '' }}" href="{{ route('admin.news') }}">
                            Data Berita
                        </a>
                    @endif
                        <hr class="dropdown-divider w-100">
                        <a class="dropdown-item" href="{{ route('logout') }}">
                            Log Out
                        </a>
                    </div>
                </li>
                </ul>
            @else
                <a href="" data-bs-toggle="modal" data-bs-target="#modalSignIn">
                    <button class="btn btn-secondary px-4 py-1">Sign In</button>
                </a>
            @endif
            
        </div>
        </div>
    </div>
    </nav>
@php
    use Illuminate\Support\Str;
@endphp

<!-- Header Navbar Start -->
<header class="sticky-header border-btm-black header-1">
    <div class="header-bottom">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo Section -->
                <div class="col-lg-3 col-md-4 col-4">
                    <div class="header-logo">
                        <a href="{{ route('index') }}" class="logo-main">
                            <img src="{{asset('assets/img/logo-rima.png')}}" loading="lazy" alt="rima batik">
                        </a>
                    </div>
                </div>

                <!-- Main Navigation Section for Large Screens -->
                <div class="col-lg-6 d-lg-block d-none">
                    <nav class="site-navigation">
                        <ul class="main-menu list-unstyled justify-content-center">
                            <li class="menu-list-item nav-item {{ Route::currentRouteName() == 'index' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('index') }}">Beranda</a>
                            </li>
                            <li class="menu-list-item nav-item {{ Route::currentRouteName() == 'tentang' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                            </li>
                            <li class="menu-list-item nav-item {{ in_array(Route::currentRouteName(), ['katalog', 'produk']) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('katalog') }}">Katalog</a>
                            </li>                            
                            <li class="menu-list-item nav-item {{ in_array(Route::currentRouteName(), ['event', 'article']) ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('event') }}">Event</a>
                            </li>
                            <li class="menu-list-item nav-item {{ Route::currentRouteName() == 'kontak' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Action Items & Hamburger for Small Screens -->
                <div class="col-lg-3 col-md-8 col-8">
                    <div class="header-action d-flex align-items-center justify-content-end">
                        <!-- Hamburger Icon for Small Screens -->
                        <a class="header-action-item header-hamburger ms-4 d-lg-none" href="#drawer-menu" data-bs-toggle="offcanvas">
                            <svg class="icon icon-hamburger" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Navbar End -->

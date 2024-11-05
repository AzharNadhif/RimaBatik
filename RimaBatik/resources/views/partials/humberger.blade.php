<!-- Humberger Navigasi Responsive -->
<div class="offcanvas offcanvas-start d-flex d-lg-none" tabindex="-1" id="drawer-menu">
    <div class="offcanvas-wrapper">
        <div class="offcanvas-header border-btm-black">
            <div class="header-logo">
                <a href="index.html" class="logo-main">
                    <img src="assets/img/logo-rima.png" loading="lazy" alt="rima batik">
                </a>
            </div>
            
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0 d-flex flex-column justify-content-between">
            <nav class="site-navigation">
                <ul class="main-menu list-unstyled">
                    <li class="menu-list-item nav-item has-dropdown active">
                        <a class="nav-link active" href="{{route('index')}}">Beranda </a>
                    </li>
                    <li class="menu-list-item nav-item has-megamenu">
                        <a class="nav-link" href="{{route('tentang')}}">Tentang </a>
                    </li>
                    <li class="menu-list-item nav-item">
                        <a class="nav-link" href="{{route('katalog')}}">Katalog</a>
                    </li>
                    <li class="menu-list-item nav-item has-dropdown">
                        <a class="nav-link" href="{{route('event')}}">Event</a>
                    </li>
                    <li class="menu-list-item nav-item">
                        <a class="nav-link" href="{{route('kontak')}}">Kontak</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Humberger Navigasi Responsive -->
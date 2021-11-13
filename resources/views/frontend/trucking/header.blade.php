<div class="header-wrapper">
    <!-- .header.header-style01 start -->
    <header id="header" class="header-style01">
        <!-- .container start -->
        <div class="container">
            <!-- .main-nav start -->
            <div class="main-nav">
                <!-- .row start -->
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default nav-left" role="navigation">

                            <!-- .navbar-header start -->
                            <div class="navbar-header">
                                <div class="logo">
                                    <a href="{{ route('homepage') }}">
                                        <img src="{{ Helper::files('logo/logo.png') }}"
                                            alt="Trucking Transportation and Logistics HTML Template" />
                                    </a>
                                </div><!-- .logo end -->
                            </div><!-- .navbar-header start -->

                            <!-- MAIN NAVIGATION -->
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="{{ empty($current_url) ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('homepage') }}">Home</a>
                                    </li>

                                    <li class="{{ $current_url == 'about' ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('about') }}">Tentang Kami</a>
                                    </li>

                                    <li class="dropdown {{ $current_url == 'services' ? 'current-menu-item' : '' }}">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Produk</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('services') }}">Servis Forklift</a></li>
                                            <li><a href="">Rekondisi (Konsultasi Gratis)</a></li>
                                            <li><a href="{{ route('spareparts') }}">Penggantian Spare part</a></li>
                                            <li><a href="">Pembelian Unit dan Sewa</a></li>
                                        </ul><!-- .dropdown-menu end -->
                                    </li><!-- .dropdown end -->

                                    <li class="{{ $current_url == 'articles' ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('articles') }}">Artikel</a>
                                    </li>

                                    <li class="{{ $current_url == 'contact' ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('contact') }}">Kontak</a>
                                    </li>
                                </ul><!-- .nav.navbar-nav end -->

                                <!-- RESPONSIVE MENU -->
                                <div id="dl-menu" class="dl-menuwrapper">
                                    <button class="dl-trigger">Open Menu</button>

                                    <ul class="dl-menu">
                                        <li>
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>

                                        <li class="{{ $current_url == 'about' ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('about') }}">About</a>
                                        </li>

                                        <li>
                                            <a href="#">Products</a>
                                            <ul class="dl-submenu">
                                                <li><a href="{{ route('services') }}">Services Solution</a></li>
                                                <li><a href="">Maintenance Solution</a></li>
                                                <li><a href="{{ route('spareparts') }}">Spart Parts Forklift</a></li>
                                                <li><a href="">Consulting Service</a></li>
                                            </ul><!-- dl-submenu end -->
                                        </li>

                                        <li class="{{ $current_url == 'articles' ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('articles') }}">Articles</a>
                                        </li>

                                        <li class="{{ $current_url == 'contact' ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('contact') }}">Contact</a>
                                        </li>
                                    </ul><!-- .dl-menu end -->



                                </div><!-- #dl-menu end -->

                            </div><!-- MAIN NAVIGATION END -->
                        </nav><!-- .navbar.navbar-default end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .main-nav end -->
        </div><!-- .container end -->
    </header><!-- .header.header-style01 -->
</div><!-- .header-wrapper.header-transparent end -->
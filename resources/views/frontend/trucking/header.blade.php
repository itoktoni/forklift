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
                                    <a href="index-2.html">
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
                                        <a href="{{ route('about') }}">About</a>
                                    </li>

                                    <li class="{{ $current_url == 'services' ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('services') }}">Services</a>
                                    </li>
                                    
                                    <li class="{{ $current_url == 'articles' ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('articles') }}">Articles</a>
                                    </li>
                                  
                                    <li class="{{ $current_url == 'contact' ? 'current-menu-item' : '' }}">
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul><!-- .nav.navbar-nav end -->

                                <!-- RESPONSIVE MENU -->
                                <div id="dl-menu" class="dl-menuwrapper">
                                    <button class="dl-trigger">Open Menu</button>

                                    <ul class="dl-menu">
                                        <li>
                                            <a href="index-2.html">Home</a>
                                        </li>

                                        <li>
                                            <a href="#">About</a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="#">Header types</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="index-2.html">Header default</a></li>
                                                        <li><a href="header-default-top-bar.html">Header default top
                                                                bar</a></li>
                                                        <li><a href="index08.html">Header simple light bar</a></li>
                                                        <li><a href="header-simple-dark-bar.html">Header simple dark
                                                                bar</a></li>
                                                        <li><a href="header-simple-dark.html">Header simple dark</a>
                                                        </li>
                                                        <li><a href="header-menu-bottom.html">Header menu bottom
                                                                light</a></li>
                                                        <li><a href="header-menu-bottom-dark.html">Header menu bottom
                                                                dark</a></li>
                                                    </ul><!-- .dl-submenu end -->
                                                </li>
                                                <li><a href="about01.html">About simple</a></li>
                                                <li><a href="about02.html">About compact</a></li>
                                                <li><a href="about03.html">About with sidebar</a></li>
                                                <li><a href="simple-page-title.html">Simple page title</a></li>
                                                <li><a href="company-history.html">Company history</a></li>
                                                <li><a href="events.html">Company Events</a></li>
                                                <li><a href="clients.html">Company Clients</a></li>
                                                <li><a href="careers.html">Careers</a></li>
                                                <li><a href="driver-application.html">Online driver application</a></li>
                                            </ul><!-- dl-submenu end -->
                                        </li>

                                        <li>
                                            <a href="#">Services</a>
                                            <ul class="dl-submenu">
                                                <li><a href="services01.html">Services overview</a></li>
                                                <li>
                                                    <a href="#">Logistics</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="services02.html">Logistics</a></li>
                                                        <li><a href="overland-transportation.html">Overland
                                                                transportation</a></li>
                                                        <li><a href="air-freight.html">Air freight</a></li>
                                                        <li><a href="ocean-freight.html">Ocean freight</a></li>
                                                        <li><a href="large-projects.html">Large projects</a></li>
                                                        <li><a href="rail-transportation.html">Rail international
                                                                shipping</a></li>
                                                        <li><a href="contract-logistics.html">Contract logistics</a>
                                                        </li>
                                                    </ul><!-- .dl-submenu end -->
                                                </li>
                                                <li><a href="warehousing.html">Warehousing</a></li>
                                                <li><a href="supply-chain-management.html">Supply chain management</a>
                                                </li>
                                                <li><a href="packaging-options.html">Packaging options</a></li>
                                                <li><a href="consulting-services.html">Consulting services</a></li>
                                            </ul><!-- dl-submenu end -->
                                        </li>

                                        <li>
                                            <a href="#">News</a>
                                            <ul class="dl-submenu">
                                                <li><a href="news-list.html">News list</a></li>
                                                <li><a href="news-masonry.html">News masonry</a></li>
                                                <li><a href="news-standard.html">News standard</a></li>
                                                <li><a href="news-single.html">News single</a></li>
                                            </ul><!-- .dl-submenu end -->
                                        </li>

                                        <li>
                                            <a href="#">Gallery</a>
                                            <ul class="dl-submenu">
                                                <li><a href="gallery01.html">Vehicle gallery full</a></li>
                                                <li><a href="gallery02.html">Vehicle gallery grid</a></li>
                                            </ul><!-- .dl-submenu end -->
                                        </li>

                                        <li><a href="locations.html">Locations</a></li>

                                        <li>
                                            <a href="#">Contact</a>
                                            <ul class="dl-submenu">
                                                <li><a href="contact-simple.html">Contact simple</a></li>
                                                <li><a href="contact-locations.html">Contact locations</a></li>
                                            </ul><!-- .dl-submenu end -->
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
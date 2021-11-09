@extends(Helper::setExtendFrontend())

@section('content')

<!-- .page-title start -->
<div class="page-title-style01 page-title-negative-top pt-bkg02">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ env('WEBSITE_NAME') }} - Spare Parts</h1>

                <div class="breadcrumb-container">
                    <ul class="breadcrumb clearfix">
                        <li>You are here:</li>

                        <li>
                            <a href="index-2.html">Home</a>
                        </li>

                        <li>
                            <a href="about02.html">About</a>
                        </li>

                        <li>
                            <a href="#">About Compact</a>
                        </li>
                    </ul><!-- .breadcrumb end -->
                </div><!-- .breadcrumb-container end -->
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-title-style01.page-title-negative-top end -->

<div class="page-content">
    <div class="container">
        <div class="row">
            <aside class="col-md-3 aside aside-left">
                <ul class="aside-widgets">
                    <li class="widget widget_nav_menu clearfix">
                        <div class="title">
                            <h3>Category</h3>
                        </div>

                        <ul class="menu">
                            <li class="menu-item">
                                <a href="services02.html">Logistics</a>
                            </li>

                            <li class="menu-item">
                                <a href="overland-transportation.html">Overland transportation</a>
                            </li>

                            <li class="menu-item">
                                <a href="air-freight.html">Air freight</a>
                            </li>

                            <li class="menu-item">
                                <a href="ocean-freight.html">Ocean freight</a>
                            </li>

                            <li class="menu-item">
                                <a href="large-projects.html">Project logistics</a>
                            </li>

                            <li class="menu-item">
                                <a href="contract-logistics.html">Contract logistics</a>
                            </li>

                            <li class="menu-item">
                                <a href="rail-transportation.html">Rail transportation</a>
                            </li>

                            <li class="menu-item">
                                <a href="warehousing.html">Warehousing</a>
                            </li>

                            <li class="menu-item">
                                <a href="supply-chain-management.html">Supply chain management</a>
                            </li>

                            <li class="menu-item">
                                <a href="packaging-options.html">Packaging options</a>
                            </li>

                            <li class="menu-item current-menu-item">
                                <a href="consulting-services.html">Consulting services</a>
                            </li>
                        </ul><!-- .menu end -->
                    </li><!-- .widget.widget_nav_menu end -->

                    <li class="widget widget-text">
                        <div class="title">
                            <h3>brochure download</h3>
                        </div>

                        <img src="{{ Helper::frontend('img/pics/brochure02.jpg') }}" alt="Trucking brochure" />
                        <br />

                        <a href="trucking_brochure.pdf" target="_blank" class="download-link">
                            <span>
                                <i class="fa fa-file-pdf-o"></i>
                                Annual brochure_EN.pdf
                            </span>
                        </a>

                        <a href="trucking_brochure.pdf" target="_blank" class="download-link">
                            <span>
                                <i class="fa fa-file-pdf-o"></i>
                                Annual brochure_FR.pdf
                            </span>
                        </a>
                    </li><!-- .widget.widget-text end -->

                    <!-- .widget.widget-text start -->
                    <li class="widget widget-text">
                        <div class="title">
                            <h3>contact us</h3>
                        </div>

                        <img src="{{ Helper::frontend('img/pics/locations.jpg') }}" alt="contact us" />

                        <br />

                        <p>
                            Let us know what can we do for you. Contact
                            us today!
                        </p>

                        <a href="contact-simple.html" class="read-more">
                            <span>
                                Contact us
                                <i class="fa fa-chevron-right"></i>
                            </span>
                        </a>
                    </li><!-- .widget-text end -->
                </ul><!-- .aside-widgets end -->
            </aside><!-- .aside.aside-left end -->

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5">
                        <img class="mt-1" src="{{ Helper::files('spareparts/spareparts.jpg') }}" alt="" />
                    </div><!-- .col-md-4 end -->

                    <div class="col-md-7">
                        <div class="custom-heading">
                            <h2>Spare Part Solution</h2>
                        </div>

                        <p>
                            Nusa Engineering has direct access with Part manufacturers ansuppliers in America, Japan and
                            Europe, especially Germany, to
                            guarantee the availability of forklift parts (Diesel, Battery and Gas) for
                            various brands of forklifts
                        </p>

                        <p>
                            All you have to do is send the spare part data that
                            you need including: Brand / Forklift Type, Spare Part Type, Part / Serial
                            Number), and we will help you with guaranteed delivery time ancompetitive prices.
                        </p>
                    </div><!-- .col-md-5 end -->
                    
                </div><!-- .row end -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-heading">
                            <h3>Products</h3>
                        </div><!-- .custom-heading end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->

                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="service-feature-box">
                            <div class="service-media">
                                <img src="{{ Helper::frontend('img/pics/img01.jpg') }}" alt="Trucking" />

                                <a href="overland-transportation.html" class="read-more02">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div><!-- .service-media end -->

                            <div class="service-body">
                                <div class="custom-heading">
                                    <h4>GROUND SHIPPING</h4>
                                </div><!-- .custom-heading end -->

                                <p>
                                    We have a wide experience in overland
                                    industry specific logistic solutions like
                                    pharmaceutical logistics, retail and
                                    automotive logistics by train or road.
                                </p>
                            </div><!-- .service-body end -->
                        </div><!-- .service-feature-box-end -->
                    </div><!-- .col-md-4 end -->

                    <div class="col-md-4 col-sm-4">
                        <div class="service-feature-box">
                            <div class="service-media">
                                <img src="{{ Helper::frontend('img/pics/img02.jpg') }}" alt="Trucking" />

                                <a href="large-projects.html" class="read-more02">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div><!-- .service-media end -->

                            <div class="service-body">
                                <div class="custom-heading">
                                    <h4>LARGE PROJECTS</h4>
                                </div><!-- .custom-heading end -->

                                <p>
                                    We bring your goods safely to worldwide
                                    destinations with our great sea fright
                                    services. We offer LLC and FLC shipments
                                    that are fast and effective with no delays.
                                </p>
                            </div><!-- .service-body end -->
                        </div><!-- .service-feature-box-end -->
                    </div><!-- .col-md-4 end -->

                    <div class="col-md-4 col-sm-4">
                        <div class="service-feature-box">
                            <div class="service-media">
                                <img src="{{ Helper::frontend('img/pics/img03.jpg') }}" alt="Trucking" />

                                <a href="air-freight.html" class="read-more02">
                                    <span>
                                        Read more
                                        <i class="fa fa-chevron-right"></i>
                                    </span>
                                </a>
                            </div><!-- .service-media end -->

                            <div class="service-body">
                                <div class="custom-heading">
                                    <h4>AIR FREIGHT</h4>
                                </div><!-- .custom-heading end -->

                                <p>
                                    We provide full supply chain management
                                    package including cost effective and fast
                                    sea freight. You can also combine this
                                    package with other means of transportation.
                                </p>
                            </div><!-- .service-body end -->
                        </div><!-- .service-feature-box-end -->
                    </div><!-- .col-md-4 end -->
                </div><!-- .row end -->
            </div><!-- .col-md-9 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->
@endsection
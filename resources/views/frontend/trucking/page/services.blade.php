@extends(Helper::setExtendFrontend())

@section('content')

<!-- .page-title start -->
<div class="page-title-style01 page-title-negative-top pt-bkg02">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ env('WEBSITE_NAME') }} - Our Service</h1>

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

<div class="page-content service">
    <div class="container">
        <div class="row">
            <div class="col-md-5">

                <ul class="fa-ul large-icons">
                    <li>
                        <div class="icon-container animated triggerAnimation" data-animate="zoomIn">
                            <i class="fa fa-check-circle"></i>
                        </div>

                        <div class="li-content">
                            <h3>SERVICES & MAINTENANCE SOLUTION</h3>

                            <p>
                                Nusa Engineering serves service and maintenance of
                                various types of forklifts, support with professional and
                                experienced engineers.
                            </p>

                            <p>
                                <strong>Service contracts solution.</strong> The program is full service of
                                preventive maintenance, to reduce the risk of damage
                                resulting in high costs for repairs.
                            </p>

                            <p>
                                Activating preventive maintenance can maintain the
                                best performance of the forklift, resulting fair benefit to
                                the company’s business.
                            </p>

                            <p>
                                We have been trusted to handle service contracts /
                                preventive maintenance in several national and
                                multinational companies throughout Indonesia.
                            </p>

                            <p>
                                Service and maintenance services are strengthened by
                                the availability of spare parts at competitive prices with
                                fast response times.
                            </p>


                        </div><!-- .li-content end -->
                    </li>


                </ul><!-- .fa-ul .fa-ul-large end -->
            </div><!-- .col-md-5 end -->

            <div class="col-md-7" data-animate="fadeInRight">
                <img src="{{ Helper::frontend('img/pics/forklift.jpg') }}" alt="trucking" />
            </div><!-- .col-md-7 end -->
        </div><!-- .row end -->

        <div class="row">


            <div class="col-md-6">
                <div class="container-dark background-dark">
                    <div class="custom-heading">
                        <h2>Spare Parts Solution</h2>
                    </div><!-- .custom-heading end -->

                    <p>
                        Nusa Engineering has direct access with Part manufacturers ansuppliers in America, Japan and
                        Europe, especially Germany, to
                        guarantee the availability of forklift parts (Diesel, Battery and Gas) for
                        various brands of forklifts;
                    </p>

                    <ul class="fa-ul mt-3">
                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            • JUNGHEINRICH • CROWN • NICHIYU • CASE • NISSAN FORKLIFT
                            • KALMAR • ATLET • MULTITON • STILLRAYMOND • LINDE
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            • SINKOBE • SAMSUNG • FANTUZZI USA • LAFIS • BIG JOE
                            • PETTIBONE
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            • SMV FORKLIFTTCM • BOB CAT • BARRETT • SAMUK • BLUE GIANT
                            • HAMECH • ROCIA • TAYLOR • DW FORKLIFT • CAT • YALE • HYSTER
                        </li>

                        <li>
                            <i class="fa fa-li fa-long-arrow-right"></i>
                            • RANSOMES • HYUNDAI • CASCADE • JCB • MANITOU • WIGGINS
                            • TOYOTA
                        </li>
                    </ul><!-- .fa-ul end -->

                    <p class="mt-3">
                        <strong>Spare Parts solution.</strong> All you have to do is send the spare part data that
                        you need including: Brand / Forklift Type, Spare Part Type, Part / Serial
                        Number), and we will help you with guaranteed delivery time ancompetitive prices.
                    </p>

                </div>
            </div><!-- .col-md-6 end -->

            <div class="col-md-6 clearfix">
                <div class="custom-heading">
                    <h2>taking it step by step</h2>
                </div><!-- .custom-heading end -->

                <ul class="service-list-big-icons-details">
                    <li>
                        <div class="icon-container">
                            <img class="animated triggerAnimation" data-animate="zoomIn"
                                src="{{ Helper::frontend('img/svg/pi-checklist-2.svg') }}" alt="checklist icon" />
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h4>Business Analysis</h4>

                            <p>
                                We examine your business to understand
                                how it works so we could make a detailed
                                supply chain management design.
                            </p>
                        </div><!-- .service-details end -->
                    </li>

                    <li>
                        <div class="icon-container">
                            <img class="animated triggerAnimation" data-animate="zoomIn"
                                src="{{ Helper::frontend('img/svg/pi-forklift-truck-5.svg') }}"
                                alt="forklift truck icon" />
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h4>Detailed Planning</h4>

                            <p>
                                We desine facilities, means of
                                transport, best transport routes and
                                then optimize it.
                            </p>
                        </div><!-- .service-details end -->
                    </li>

                    <li>
                        <div class="icon-container">
                            <img class="animated triggerAnimation" data-animate="zoomIn"
                                src="{{ Helper::frontend('img/svg/pi-touch-desktop.svg') }}" alt="touch icon" />
                        </div><!-- .icon-container end -->

                        <div class="service-details">
                            <h4>Quality control and monitoring</h4>

                            <p>
                                With intelligent software solutions you
                                can know your supplies and demand status
                                and what is happening in all chain of
                                transportation.
                            </p>
                        </div><!-- .service-details end -->
                    </li>
                </ul><!-- .service-list-big-icons-details end -->
            </div><!-- .col-md-6 end -->


        </div><!-- .row end -->

    </div><!-- .container end -->
</div><!-- .page-content end -->

@endsection
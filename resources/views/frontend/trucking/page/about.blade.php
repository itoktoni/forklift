@extends(Helper::setExtendFrontend())

@section('content')

<!-- .page-title start -->
<div class="page-title-style01 page-title-negative-top pt-bkg02">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ env('WEBSITE_NAME') }} - About Us</h1>

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
            <div class="col-md-6">
                <div class="custom-heading">
                    <h2>company profile</h2>
                </div><!-- .custom-heading end -->

                <p>
                    Established in 2019, Kei Hai focused on MHE Servic Maintenances, Parts instalment and substitution.
                </p>

                <p>
                    Having a concern in ensuring customer satisfaction, Kei
                    Hai employs skilled and well trained engineers/mechanics
                    with high experience in the material handling equipment.
                </p>
                <p>
                    Kei Hai having high confidence in Service & Maintenance
                    and Parts to meet customer needs related to the needs of
                    Forklifts parts. We offer quality proven equipment in
                    every class with various features that suit your needs and
                    can increase company productivity.
                </p>
            </div><!-- .col-md-6 end -->

            <div class="col-md-6 animated triggerAnimation about-image" data-animate="zoomIn">
                <img src="{{ Helper::frontend('img/slider/forklift.jpg') }}" alt="" />
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

<div class="page-content background-grey">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="custom-heading">
                    <h2>Our Vision</h2>
                </div><!-- .custom-heading end -->

                <h3>
                    Be the one of the best company to support
                    Material Handling equipment by providing the
                    best Value to our partner in Material Handling
                    solutions.
                </h3>
            </div><!-- .col-md-6 end -->

            <div class="col-md-6">
                <div class="custom-heading">
                    <h2>Our Mission</h2>
                </div><!-- .custom-heading end -->

                <ul class="fa-ul">
                    <li>
                        <i class="fa fa-li fa-long-arrow-right"></i>
                        Provide the best service and part supplies
                        for our products (After sales services is
                        the highest priority)
                    </li>

                    <li>
                        <i class="fa fa-li fa-long-arrow-right"></i>
                        Be the good partner in the material
                        handling solutions with the strongest
                        commitment (Service maintenance)
                    </li>

                    <li>
                        <i class="fa fa-li fa-long-arrow-right"></i>
                        Support in creating more benefit
                        to our business partner with
                        professional service,
                        comprehensive and sustainability.
                    </li>
                </ul><!-- .fa-ul end -->
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content.custom-bkg end -->

<div class="page-content mt-5">
    <div class="container">
        <div class="row">
            <div class="custom-heading02">
                <h2>Our core values</h2>
                <p>THE THING THAT MAKES US DIFFERENT</p>
            </div>
        </div><!-- .row end -->

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="service-icon-center">
                    <div class="icon-container">
                        <i class="fa fa-graduation-cap"></i>
                    </div>

                    <h4>Always learning</h4>

                    <p>
                        Cozy sphinx waves quart jug of bad milk. A
                        very bad quack might jinx zippy fowls. Few
                        quips galvanized the mock jury box.
                    </p>
                </div><!-- .service-icon-center end -->
            </div><!-- .col-md-3 end -->

            <div class="col-md-3 col-sm-6">
                <div class="service-icon-center">
                    <div class="icon-container">
                        <i class="fa fa-cogs"></i>
                    </div>

                    <h4>Latest Technology</h4>

                    <p>
                        Cozy sphinx waves quart jug of bad milk. A
                        very bad quack might jinx zippy fowls. Few
                        quips galvanized the mock jury box.
                    </p>
                </div><!-- .service-icon-center end -->
            </div><!-- .col-md-3 end -->

            <div class="col-md-3 col-sm-6">
                <div class="service-icon-center">
                    <div class="icon-container">
                        <i class="fa fa-cubes"></i>
                    </div>

                    <h4>Safety & Quality</h4>

                    <p>
                        Cozy sphinx waves quart jug of bad milk. A
                        very bad quack might jinx zippy fowls. Few
                        quips galvanized the mock jury box.
                    </p>
                </div><!-- .service-icon-center end -->
            </div><!-- .col-md-3 end -->

            <div class="col-md-3 col-sm-6">
                <div class="service-icon-center">
                    <div class="icon-container">
                        <i class="fa fa-tree"></i>
                    </div>

                    <h4>Care for Environment</h4>

                    <p>
                        Cozy sphinx waves quart jug of bad milk. A
                        very bad quack might jinx zippy fowls. Few
                        quips galvanized the mock jury box.
                    </p>
                </div><!-- .service-icon-center end -->
            </div><!-- .col-md-3 end -->
        </div><!-- .row end -->

    </div><!-- .container end -->
</div><!-- .page-content end -->

@endsection
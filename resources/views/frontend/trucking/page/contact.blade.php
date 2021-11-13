@extends(Helper::setExtendFrontend())

@section('content')

<!-- .page-title start -->
<div class="page-title-style01 page-title-negative-top pt-bkg02">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Trucking - Global Logistics Solutions</h1>

                <div class="breadcrumb-container">
                    <ul class="breadcrumb clearfix">
                        <li>You are here:</li>

                        <li>
                            <a href="index-2.html">Home</a>
                        </li>

                        <li>
                            <a href="about02.html">Contact</a>
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
                    <h3>Thank you</h3>
                </div><!-- .custom-heading.left end -->

                <p>
                    Thank you for your attention and Great
                    thanks for choosing <br>“Nusa Engineering”
                    to be a part of your business success.
                </p>

                <br />

                <!-- .contact form start -->
                <form class="wpcf7 clearfix">
                    <fieldset>
                        <label>
                            <span class="required">*</span> Your request:
                        </label>

                        <select class="wpcf7-form-control-wrap wpcf7-select" id="contact-inquiry">
                            <option value="I need an offer for contract logistics">I need an offer for contract
                                logistics</option>
                            <option value="I need an offer for air freight">I need an offer for air freight</option>
                            <option value="I want to become your partner">I want to become your partner</option>
                            <option value="I have some other request">I have some other request</option>
                        </select>
                    </fieldset>

                    <fieldset>
                        <label>
                            <span class="required">*</span> First Name:
                        </label>

                        <input type="text" class="wpcf7-text" id="contact-name">
                    </fieldset>

                    <fieldset>
                        <label>
                            <span class="required">*</span> Last Name:
                        </label>

                        <input type="text" class="wpcf7-text" id="contact-last-name">
                    </fieldset>

                    <fieldset>
                        <label>
                            <span class="required">*</span> Email:
                        </label>

                        <input type="url" class="wpcf7-text" id="contact-email">
                    </fieldset>

                    <fieldset>
                        <label>
                            <span class="required">*</span> Message:
                        </label>

                        <textarea rows="8" class="wpcf7-textarea" id="contact-message"></textarea>
                    </fieldset>

                    <input type="submit" class="wpcf7-submit" value="send" />
                </form><!-- .wpcf7 end -->
            </div><!-- .col-md-6 end -->

            <div class="col-md-6">
                <div class="custom-heading">
                    <h3>Trucking headquarters</h3>
                </div><!-- .custom-heading end -->

                <div id="map">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d977.2567960514386!2d107.15597199755047!3d-6.2861393344726935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698561bb5afd31%3A0xd5691904f7da44ae!2sRira%20Green%20Park!5e1!3m2!1sid!2sid!4v1636273362577!5m2!1sid!2sid"
                        width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>

                <div class="custom-heading mt-5">
                    <h4>Company information</h4>
                </div><!-- .custom-heading end -->

                <address>
                    <p>
                        Komplek Pergudangan Rira Green
                        Park, Blok E6, Jl. Industri, No.9a,
                        Pasir Gombong, Cikarang Utara –
                        Bekasi 19530
                    </p>
                </address>

                <span class="text-big colored">
                    +6221-89321221
                </span>
                <br />
                <span class="text-big colored">
                    <a href="">+62852 8889 1999 (LEE)</a>
                </span>
                <br />

                <a href="mailto:">Lee.ramleee@gmail.com</a>

                <br />
                <br />
                <h3>Contact Marketing : </h3>
                <span class="text-big colored">
                    Wa : <a href="">+62852 8889 1999 (Example 1)</a>
                </span>
                <br />
                <span class="text-big colored">
                    Wa : <a href="">+62852 8889 1999 (Example 2)</a>
                </span>
                <br />
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->

@endsection
<div id="footer-wrapper" class="footer-dark">
    <footer id="footer">
        <div class="container">
            <div class="row">
                <ul class="col-md-3 col-sm-6 footer-widget-container clearfix">
                    <!-- .widget.widget_text -->
                    <li class="widget widget_newsletterwidget">
                        <div class="title">
                            <h3>newsletter subscribe</h3>
                        </div>

                        <p>
                            Subscribe to our newsletter and we will
                            inform you about newest projects and promotions.
                        </p>


                        <form class="newsletter">
                            <input class="email" type="email" placeholder="Your email...">
                            <input type="submit" class="submit" value="">
                        </form>
                    </li><!-- .widget.widget_newsletterwidget end -->
                </ul><!-- .col-md-3.footer-widget-container end -->

                <ul class="col-md-3 col-sm-6 footer-widget-container">
                    <!-- .widget-pages start -->
                    <li class="widget widget_pages">
                        <div class="title">
                            <h3>quick links</h3>
                        </div>

                        <ul>
                            <li><a href="{{ route('about') }}">About us</a></li>
                            <li><a href="{{ route('articles') }}">Articles</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                           
                        </ul>
                    </li><!-- .widget-pages end -->
                </ul><!-- .col-md-3.footer-widget-container end -->

                <ul class="col-md-3 col-sm-6 footer-widget-container">
                    <!-- .widget-pages start -->
                    <li class="widget widget_pages">
                        <div class="title">
                            <h3>Products</h3>
                        </div>

                        <ul>
                            <li><a href="{{ route('services') }}">Service and Maintanance</a></li>
                            <li><a href="{{ route('spareparts') }}">Spare Parts Forklift</a></li>
                            <li><a href="">Consulting Service</a></li>
                           
                        </ul>
                    </li><!-- .widget-pages end -->
                </ul><!-- .col-md-3.footer-widget-container end -->

                <ul class="col-md-3 col-sm-6 footer-widget-container">
                    <li class="widget widget-text">
                        <div class="title">
                            <h3>Contact us</h3>
                        </div>

                        <address>
                            {{ env('WEBSITE_ADDRESS') }}
                        </address>

                        <span class="text-big">
                            {{ env('WEBSITE_PHONE') }}
                        </span>
                        <br />

                        <a href="mailto:">{{ env('WEBSITE_EMAIL') }}</a>
                        <br />
                        <ul class="footer-social-icons">
                            <li><a href="" class="fa fa-facebook"></a></li>
                            <li><a href="" class="fa fa-twitter"></a></li>
                            <li><a href="" class="fa fa-google-plus"></a></li>
                        </ul><!-- .footer-social-icons end -->
                    </li><!-- .widget.widget-text end -->
                </ul><!-- .col-md-3.footer-widget-container end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </footer><!-- #footer end -->

    <div class="copyright-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>{{ env('WEBSITE_NAME') }}. All RIGHTS RESERVED.</p>
                </div><!-- .col-md-6 end -->

                <div class="col-md-6">
                    <p class="align-right">DESIGNED AND DEVELOPED BY <a href="{{ Helper::frontend('www.pixel-industry.html">PIXEL INDUSTRY.</a> ELITE AUTHOR.</p>
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .copyright-container end -->

    <a href="" class="scroll-up">Scroll</a>
</div><!-- #footer-wrapper end -->
{{-- <div class="icon-bar" id="bar_scroll">
    <a target="_blank" href="{{ $generalInfo->facebook }}" class="facebook">
        <i class="fa-brands fa-facebook"></i>
    </a>
    <a target="_blank" href="{{ $generalInfo->linkedin }}" class="linkedin">
        <i class="fa-brands fa-linkedin"></i>
    </a>
    <a target="_blank" href="{{ $generalInfo->instagram }}" class="instagram">
        <i class="fa-brands fa-instagram"></i></a>
    <a target="_blank" href="{{ $generalInfo->youtube }}" class="youtube">
        <i class="fa-brands fa-youtube"></i>
    </a>
</div>
<div class="your-button-class">
    <button onclick="showTable()"><i class="fa fa-table" aria-hidden="true"></i></button>
</div>
<div class="table__custom icon-bar" id="table-container">
    <a target="_blank" href="{{ $generalInfo->facebook }}" class="facebook">
        <i class="fa-brands fa-facebook"></i>
    </a>
    <a target="_blank" href="{{ $generalInfo->linkedin }}" class="linkedin">
        <i class="fa-brands fa-linkedin"></i>
    </a>
    <a target="_blank" href="{{ $generalInfo->instagram }}" class="instagram">
        <i class="fa-brands fa-instagram"></i></a>
    <a target="_blank" href="{{ $generalInfo->youtube }}" class="youtube">
        <i class="fa-brands fa-youtube"></i>
    </a>
</div> --}}
@if ($generalInfo->whatsapp)
    <div class="whatsapp-icon">
        <a href="https://wa.me/{{ $generalInfo->whatsapp }}" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
        {{-- <a href="https://chat.whatsapp.com/EeRpv3xqv3E2MJ1kTRLqhc" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
        </a> --}}

    </div>
@endif
<!--Site Footer Start-->
<footer>
    <div class="footer">
        {{-- <div class="footer-top">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-lg-3">
                                <h4 class="widget-newsletter-title font1 font-weight-bold text-white ls-n-10">Sign Up to Newsletter
                                </h4>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <p class="widget-newsletter-content ls-n-10 text-white mb-0">Get all the latest information on Events, Sales and Offers.</p>
                                <span class="widget-newsletter-content d-block font-weight-bold ls-n-10 text-white">Receive
                                    $10 coupon for first shopping.</span>
                            </div>
                            <div class="col-md-10 col-lg-5">
                                <form action="#" class="mb-0">
                                    <div class="footer-submit-wrapper d-flex">
                                        <input type="email" class="form-control mb-0" placeholder="Enter your Email address..." required>
                                        <button type="submit" class="btn btn-md btn-dark">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}

        <div class="container">
            <div class="footer-middle">
                <div class="row">
                    <div class="col-lg-3 mb-1">
                        <a href="demo21.html">
                            <img src="{{ asset('frontend/img/logo.png') }}" alt="Porto Logo">
                        </a>

                        <div>
                            Welcome to Web Karigor. Stone Rose is a trusted brand of Bangladesh. Nationwide Cash On
                            Delivery (Guaranteed Delivery within 48 to 72 Hours) Hotline: 01636 000 000
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Contact Us</h4>

                            <ul class="links">
                                <li><a href="demo21-about.html"><i class="fa-solid fa-envelope"></i>
                                        Info@webkarigor.com</a></li>
                                <li><a href="demo21-contact.html"><i class="fa-solid fa-phone"></i> 09610000383</a></li>
                                <li>
                                    <a href="demo21-contact.html"><i class="fa-solid fa-location-dot"></i> 622 (Level
                                        7B) Mizan Square,
                                        Sonali Bank Building (Beside
                                        Kazipara Metrorail Station)
                                        Begum Rokeya Sarani, Kazipara,
                                        Mirpur, Dhaka-1216, Bangladesh
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Quick Links</h4>

                            <ul class="links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Return policy</a></li>
                                <li><a href="#">Refund policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title">Follow Us</h4>

                            <div class="social-icons">
                                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                                    <i class="fa-brands fa-square-instagram"></i>
                                </a>
                                <a href="#" class="social-icon social-linkedin " target="_blank">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                                <a href="#" class="social-icon social-linkedin" target="_blank">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom d-sm-flex align-items-center">
                <div class="footer-left">
                    <span class="footer-copyright">© Porto eCommerce. 2021. All Rights Reserved</span>
                </div>

                <div class="footer-right ml-auto mt-1 mt-sm-0">
                    <img src="{{asset('frontend/img/demoes/demo21/payment-icon.png')}}" alt="payment">
                </div>
            </div>
        </div>
        <!-- End .footer-bottom -->
    </div>
</footer>
<!--Site Footer End-->

@extends("layouts/header2")





    <!-- partial -->
    <!-- partial:partia/__subheader.html -->
    <div class="sigma_subheader dark-overlay dark-overlay-2" style="background-image: url(assets/img/subheader.jpg)">
        <div class="container">
            <div class="sigma_subheader-inner">
                <div class="sigma_subheader-text">
                    <h1>Dons</h1>
                    <p class="blockquote light"> We are a church that belives in Jesus christ and the followers and We are a church that belives in Jesus christ </p>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="btn-link" href="#">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dons</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- partial -->
    <!-- Form Start -->
    <div class="section">
        <div class="container">
            <div class="section-title text-center">
                <p class="subtitle">Faites un don</p>
                <h4 class="title">Aidez notre communauté à travers votre appui</h4>
            </div>
            <form action="{{ route('process') }}" method="POST" enctype="multipart/form-data">
                <div class="form-row sigma_donation-form">
                    <div class="col-lg-6">
                            <div class="col-12">
                                <div class="form-group mb-5">
                                    <h5>Montant du don</h5>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="sigma_btn-custom shadow-none btn-sm" type="button">$</button>
                                        </div>
                                        <input type="text" name='amount'class="form-control ms-0" placeholder="$100">
                                    </div>
                                    <ul class="sigma_select-amount">
                                        <li>$15.00</li>
                                        <li>$25.00</li>
                                        <li>$45.00</li>
                                        <li class="active">$100.00</li>
                                        <li>$500.00</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-5">
                                    <h5>Payment Method</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <input type="radio" id="radio" name="payment_method" value="Online Payment">
                                            <label for="radio" class="mb-0">Online Payment</label>
                                        </div>
                                        <div class="d-flex align-items-center ms-4">
                                            <input type="radio" id="radio2" name="payment_method" value="Offline Payment">
                                            <label for="radio2" class="mb-0">Offline Payment</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-12">
                                <div class="form-group">
                                    <h5>Informations du donateur</h5>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" placeholder="First Name" name="firstname">
                                        </div>
                                        <div class="col-lg-3">
                                          <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                                      </div>
                                        <div class="col-lg-3 mt-3 mt-lg-0">
                                            <input type="email" placeholder="Email Address" name="email" class="form-control">
                                        </div>
                                        <div class="col-lg-3 mt-3 mt-lg-0">
                                          <input type="tel" placeholder="phone number" name="tel" class="form-control">
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <h5>Campaigns</h5>
                                    <select name="campaigns" class="form-control">
                                        <option name="campaigns" value="1" selected>Education for Every Child - (Target: 10000.00)</option>
                                        <option name="campaigns" value="2">Education for Every Child - (Target: 10000.00)</option>
                                        <option name="campaigns" value="3">Education for Every Child - (Target: 15000.00)</option>
                                        <option name="campaigns" value="4">Education for Every Child - (Target: 25000.00)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <div class="col-12">
                        <div class="form-group">
                            <h5>Message</h5>
                            <textarea name="message" class="form-control" placeholder="Enter Message" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="sigma_btn-custom" name="button"> Donate Now </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Form End -->
    <!-- sermon Start -->
    <div class="section section-padding light-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="section-title text-end">
                        <p class="subtitle">WAYS WE CAN HELP</p>
                        <h4 class="title">Angels Ready To Help</h4>
                    </div>
                </div>
                <div class="col-md-2 d-none d-md-block"> <span class="vertical-seperator"></span> </div>
                <div class="col-md-5 d-none d-md-block">
                    <p class="fw-600 mb-0 custom-secondary">We offer a variety of customizable products and sermon for individuals, families, and businesses</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <a href="services.html" class="sigma_service style-3">
                        <div class="sigma_service-thumb">
                            <img src="assets/img/service/1.jpg" alt="img">
                            <i class="flaticon-church"></i>
                        </div>
                        <div class="sigma_service-body">
                            <h5>About Our Church</h5>
                            <p>A new house. College education. Retirement. Whatever your goals. we'll help you choose the path to go there </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6">
                    <a href="donation.html" class="sigma_service style-3">
                        <div class="sigma_service-thumb">
                            <img src="assets/img/service/2.jpg" alt="img">
                            <i class="flaticon-charity"></i>
                        </div>
                        <div class="sigma_service-body">
                            <h5>Why Sacreva Church</h5>
                            <p>A new house. College education. Retirement. Whatever your goals. we'll help you choose the path to go there </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- sermon End -->
    <a href="{{ route('process') }} ">Buy (500 FCFA)</a>

    <!-- partial:partia/__footer.html -->
    <footer class="sigma_footer footer-2 sigma_footer-dark">
        <!-- Middle Footer -->
        <div class="sigma_footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 footer-widget">
                        <h5 class="widget-title">About Us</h5>
                        <p class="mb-4">Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi, pretium ut lacinia in</p>
                        <div class="d-flex align-items-center justify-content-md-start justify-content-center">
                            <i class="far fa-phone custom-primary me-3"></i>
                            <span>987-987-930-302</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-md-start justify-content-center mt-2">
                            <i class="far fa-envelope custom-primary me-3"></i>
                            <span>info@example.com</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-md-start justify-content-center mt-2">
                            <i class="far fa-map-marker custom-primary me-3"></i>
                            <span>14/A, Poor Street City Tower, New York USA</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 footer-widget">
                        <h5 class="widget-title">Information</h5>
                        <ul>
                            <li> <a href="ministries.html">Ministries</a> </li>
                            <li> <a href="services.html">Services</a> </li>
                            <li> <a href="about-us.html">Our Church</a> </li>
                            <li> <a href="sermons.html">Sermons</a> </li>
                            <li> <a href="volunteers.html">Volunteers</a> </li>
                            <li> <a href="events.html">Events</a> </li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 footer-widget">
                        <h5 class="widget-title">Others</h5>
                        <ul>
                            <li> <a href="shop.html">Shop</a> </li>
                            <li> <a href="checkout.html">Checkout</a> </li>
                            <li> <a href="donation-archive.html">Donation</a> </li>
                            <li> <a href="contact-us.html">Contact Us</a> </li>
                            <li> <a href="blog-grid.html">Blog</a> </li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 d-none d-lg-block footer-widget widget-recent-posts">
                        <h5 class="widget-title">Recent Posts</h5>
                        <article class="sigma_recent-post">
                            <a href="blog-details.html"><img src="assets/img/blog/sm/1.jpg" alt="post"></a>
                            <div class="sigma_recent-post-body">
                                <a href="blog-details.html"> <i class="far fa-calendar"></i> May 20, 2021</a>
                                <h6> <a href="blog-details.html">As we've all discovered by now, the world can change</a> </h6>
                            </div>
                        </article>
                        <article class="sigma_recent-post">
                            <a href="blog-details.html"><img src="assets/img/blog/sm/2.jpg" alt="post"></a>
                            <div class="sigma_recent-post-body">
                                <a href="blog-details.html"> <i class="far fa-calendar"></i> May 20, 2021</a>
                                <h6> <a href="blog-details.html">Testimony love offering so blessed</a> </h6>
                            </div>
                        </article>
                        <article class="sigma_recent-post">
                            <a href="blog-details.html"><img src="assets/img/blog/sm/3.jpg" alt="post"></a>
                            <div class="sigma_recent-post-body">
                                <a href="blog-details.html"> <i class="far fa-calendar"></i> May 20, 2021</a>
                                <h6> <a href="blog-details.html">As we've all discovered by now, the world can change</a> </h6>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="sigma_footer-bottom">
            <div class="container-fluid">
                <div class="sigma_footer-copyright">
                    <p> Copyright © Sacreva - <a href="#" class="text-white">2021</a> </p>
                </div>
                <div class="sigma_footer-logo">
                    <img src="assets/img/logo.png" alt="logo">
                </div>
                <ul class="sigma_sm square">
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- partial -->
    <!-- partial:partia/__scripts.html -->
    <script src="assets/js/plugins/jquery-3.6.0.min.js"></script>
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.min.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/jquery.inview.min.js"></script>
    <script src="assets/js/plugins/jquery.event.move.js"></script>
    <script src="assets/js/plugins/wow.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- partial -->
</body>


<!-- Mirrored from metropolitanhost.com/themes/themeforest/html/sacreva/donation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 12:24:50 GMT -->
</html>
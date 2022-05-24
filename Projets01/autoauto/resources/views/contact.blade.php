@extends("layouts/header2")
    <!-- partial -->


  <!-- partial:partia/__subheader.html -->
  <div class="sigma_subheader dark-overlay dark-overlay-2" style="background-image: url(assets/img/subheader.jpg)">

    <div class="container">
      <div class="sigma_subheader-inner">
        <div class="sigma_subheader-text">
          <h1>Contactez Nous</h1>
          <p class="blockquote light"> Nous sommes à votre disposition pour vous fournir toutes les informations nécessaires</p>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="btn-link" href="#">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
      </div>
    </div>

  </div>
  <!-- partial -->

  <!-- Map Start -->
  <div class="sigma_map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9914406081493!2d2.292292615201654!3d48.85837360866272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEiffel%20Tower!5e0!3m2!1sen!2sin!4v1571115084828!5m2!1sen!2sin"
      allowfullscreen=""></iframe>
  </div>
  <!-- Map End -->

  <!-- Contact form Start -->
  <div class="section mt-negative pt-0">
    <div class="container">

      <form class="sigma_box box-lg m-0">
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <i class="far fa-user"></i>
              <input type="text" placeholder="Full Name" class="form-control dark" name="Name">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <i class="far fa-envelope"></i>
              <input type="email" placeholder="Email Address" class="form-control dark" name="email">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
              <i class="far fa-pencil"></i>
              <input type="text" placeholder="Subject" class="form-control dark" name="Subesubject">
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" placeholder="Enter Message" cols="45" rows="5" class="form-control dark"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="sigma_btn-custom" name="button">Submit Now</button>
        </div>
      </form>

    </div>
  </div>
  <!-- Contact form End -->

  <!-- Icons Start -->
  <div class="section section-padding pt-0">
    <div class="container">
      <div class="row">

        <div class="col-lg-4">
          <div class="sigma_icon-block text-center light icon-block-7">
            <i class="flaticon-email"></i>
            <div class="sigma_icon-block-content">
              <span>Send Email <i class="far fa-arrow-right"></i> </span>
              <h5> Email Address</h5>
              <p>info@example.com</p>
              <p>info@support.com</p>
            </div>
            <div class="icon-wrapper">
              <i class="flaticon-email"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="sigma_icon-block text-center light icon-block-7">
            <i class="flaticon-telephone"></i>
            <div class="sigma_icon-block-content">
              <span>Call Us Now <i class="far fa-arrow-right"></i> </span>
              <h5> Phone Number </h5>
              <p> +123 478 390 </p>
              <p> +489 472 928 </p>
            </div>
            <div class="icon-wrapper">
              <i class="flaticon-telephone"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="sigma_icon-block text-center light icon-block-7">
            <i class="flaticon-paper-plane"></i>
            <div class="sigma_icon-block-content">
              <span>Find Us Here <i class="far fa-arrow-right"></i> </span>
              <h5> Location </h5>
              <p>16/A Daddy Yankee Tower</p>
              <p>New York, US</p>
            </div>
            <div class="icon-wrapper">
              <i class="flaticon-paper-plane"></i>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Icons End -->

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


</html>

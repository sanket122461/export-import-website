<?php include '../includes/header.php'; ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 <script src="../assets/js/testimonials.js"></script>


<!-- ===== Hero Section ===== -->
<section class="hero-section d-flex align-items-center text-white" 
  style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('assets/images/hero-banner.webp') center/cover no-repeat; height: 100vh;">
  <div class="container text-center">
    <h1 class="display-4 fw-bold mb-3">Global Export & Import Solutions</h1>
    <p class="lead mb-4">Connecting businesses across the world with reliable logistics, shipping, and customs services.</p>
    <a href="services.php" class="btn btn-primary btn-lg px-4 me-2">Our Services</a>
    <a href="inquiry_form.php" class="btn btn-outline-light btn-lg px-4">Get in Touch</a>
  </div>
</section>

<!-- ===== About Section ===== -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="../assets/images/about_company.webp" class="img-fluid rounded shadow" alt="About Export Import">
      </div>
      <div class="col-lg-6">
        <h2 class="fw-bold mb-3">About Our Company</h2>
        <p>We are a trusted name in international trade, providing professional export and import services for a wide range of industries. Our mission is to simplify global trading through efficient supply chain management, customs clearance, and documentation support.</p>
        <ul class="list-unstyled mt-3">
          <li><i class="fa-solid fa-check text-primary me-2"></i>Licensed and certified global trade specialists</li>
          <li><i class="fa-solid fa-check text-primary me-2"></i>Reliable logistics and warehousing</li>
          <li><i class="fa-solid fa-check text-primary me-2"></i>Transparent and timely documentation</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ===== Services Overview ===== -->
<section class="bg-light py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-5">Our Key Services</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card border-0 shadow-sm p-4 h-100">
          <i class="fa-solid fa-ship fa-3x text-primary mb-3"></i>
          <h5 class="fw-bold mb-2">Sea Freight</h5>
          <p>Reliable sea cargo solutions with full container (FCL) and less-than-container (LCL) options.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm p-4 h-100">
          <i class="fa-solid fa-plane fa-3x text-primary mb-3"></i>
          <h5 class="fw-bold mb-2">Air Freight</h5>
          <p>Fast and secure air cargo services with global coverage and timely delivery assurance.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm p-4 h-100">
          <i class="fa-solid fa-truck fa-3x text-primary mb-3"></i>
          <h5 class="fw-bold mb-2">Customs Clearance</h5>
          <p>Expert assistance in documentation, customs duties, and regulatory compliance for imports and exports.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== Why Choose Us ===== -->
<section class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Why Choose Us?</h2>
      <p class="text-muted">We deliver excellence through reliability, experience, and customer-first service.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-3 text-center">
        <i class="fa-solid fa-globe fa-3x text-primary mb-3"></i>
        <h6 class="fw-bold">Global Network</h6>
        <p>Strong partnerships in over 50 countries for seamless trade operations.</p>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa-solid fa-handshake fa-3x text-primary mb-3"></i>
        <h6 class="fw-bold">Trusted Partnerships</h6>
        <p>Building long-term relationships based on transparency and trust.</p>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa-solid fa-boxes-stacked fa-3x text-primary mb-3"></i>
        <h6 class="fw-bold">Efficient Logistics</h6>
        <p>Optimized supply chains with minimal delays and competitive rates.</p>
      </div>
      <div class="col-md-3 text-center">
        <i class="fa-solid fa-headset fa-3x text-primary mb-3"></i>
        <h6 class="fw-bold">24/7 Support</h6>
        <p>Our support team ensures you’re never alone in your trade journey.</p>
      </div>
    </div>
  </div>
</section>
<!-- ===== Testimonials Slider (No Images) - WORKING VERSION ===== -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">What Our Clients Say</h2>
      <p class="text-muted">Our satisfied clients share their experiences with ExportImportCo’s reliable and professional services.</p>
    </div>

    <div id="testimonialCarousel" class="carousel slide carousel-fade" data-bs-ride="false" aria-label="Testimonials Carousel">
      <div class="carousel-inner">

        <!-- Testimonial 1 -->
        <div class="carousel-item active">
          <div class="card border-0 shadow-sm mx-auto" style="max-width: 800px;">
            <div class="card-body text-center p-5">
              <h6 class="fw-bold mb-1">Amit Sharma</h6>
              <small class="text-muted d-block mb-3">CEO, Global Textiles</small>
              <p class="lead fst-italic">“ExportImportCo helped us expand internationally with ease. Their logistics team is reliable, transparent, and always on time.”</p>
              <div class="text-warning mb-2">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="carousel-item">
          <div class="card border-0 shadow-sm mx-auto" style="max-width: 800px;">
            <div class="card-body text-center p-5">
              <h6 class="fw-bold mb-1">Sofia Rodriguez</h6>
              <small class="text-muted d-block mb-3">Operations Head, OceanTrade Ltd.</small>
              <p class="lead fst-italic">“The team provided exceptional freight and customs clearance support. We saved time and costs across multiple shipments.”</p>
              <div class="text-warning mb-2">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="carousel-item">
          <div class="card border-0 shadow-sm mx-auto" style="max-width: 800px;">
            <div class="card-body text-center p-5">
              <h6 class="fw-bold mb-1">Rahul Verma</h6>
              <small class="text-muted d-block mb-3">Founder, FreshSpice Exports</small>
              <p class="lead fst-italic">“Their service quality and responsiveness are top-notch. ExportImportCo has become our long-term trade partner.”</p>
              <div class="text-warning mb-2">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <i class="fa-regular fa-star"></i>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev" aria-label="Previous">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next" aria-label="Next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>

      
    </div>
  </div>
</section>





<!-- ===== CTA Section ===== -->
<section class="cta-section text-white text-center py-5" 
  style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('assets/images/contact-banner.webp') center/cover no-repeat;">
  <div class="container">
    <h2 class="fw-bold mb-3">Ready to Expand Your Business Globally?</h2>
    <p class="lead mb-4">Let’s handle your logistics while you focus on growth.</p>
    <a href="inquiry_form.php" class="btn btn-primary btn-lg px-5">Contact Us</a>
  </div>
</section>

<?php include '../includes/footer.php'; ?>

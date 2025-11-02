<?php include '../includes/header.php'; ?>

<!-- ===== Sitemap Hero Section ===== -->
<section class="text-white d-flex align-items-center justify-content-center"
  style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://source.unsplash.com/1600x500/?sitemap,website,structure') center/cover no-repeat; height: 300px;">
  <div class="container text-center">
    <h1 class="fw-bold text-uppercase">Website Sitemap</h1>
    <p class="lead">Quick access to all pages and sections of our Export & Import Services website.</p>
  </div>
</section>

<!-- ===== Sitemap Content Section ===== -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="bg-white p-4 p-md-5 rounded shadow-sm">

      <h2 class="fw-bold mb-4">Main Pages</h2>
      <ul class="list-unstyled fs-5">
        <li><a href="home.php" class="text-decoration-none text-primary">🏠 Home</a></li>
        <li><a href="about.php" class="text-decoration-none text-primary">ℹ️ About Us</a></li>
        <li><a href="services.php" class="text-decoration-none text-primary">🧭 Services</a></li>
        <li><a href="inquiry_form.php" class="text-decoration-none text-primary">📩 Inquiry Form</a></li>
        <li><a href="terms.php" class="text-decoration-none text-primary">📜 Terms & Conditions</a></li>
        <li><a href="privacy.php" class="text-decoration-none text-primary">🔒 Privacy Policy</a></li>
      </ul>

      <hr class="my-5">

      <h2 class="fw-bold mb-4">Service Categories</h2>
      <ul class="list-unstyled fs-6">
        <li>• Freight Forwarding</li>
        <li>• Customs Clearance</li>
        <li>• Warehousing & Distribution</li>
        <li>• Export Management</li>
        <li>• Import Consulting</li>
        <li>• Cargo Insurance</li>
      </ul>

      <hr class="my-5">

      <h2 class="fw-bold mb-4">Useful Links</h2>
      <ul class="list-unstyled fs-6">
        <li><a href="#footer" class="text-decoration-none text-primary">📞 Contact Information (in Footer)</a></li>
        <li><a href="sitemap.php" class="text-decoration-none text-primary">🗺️ Sitemap</a></li>
      </ul>

      <p class="text-muted mt-5">
        <small>Last updated on <?php echo date("F j, Y"); ?>.</small>
      </p>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>

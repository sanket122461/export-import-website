<?php include '../includes/header.php'; ?>
<style>
    /* ===== Services Page Image Fix ===== */
.card-img-top {
  width: 100%;
  height: 250px;              /* fixed height for all service images */
  object-fit: cover;          /* crops image nicely without stretching */
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}

</style>

<!-- ===== Services Hero Section ===== -->
<section class="text-white d-flex align-items-center justify-content-center" 
  style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://source.unsplash.com/1600x500/?cargo,shipping,port') center/cover no-repeat; height: 300px;">
  <div class="container text-center">
    <h1 class="fw-bold text-uppercase">Our Services</h1>
    <p class="lead">Comprehensive Export and Import Solutions for Global Trade Success</p>
  </div>
</section>

<!-- ===== Services Section ===== -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-uppercase">What We Offer</h2>
      <p class="text-muted mx-auto" style="max-width: 700px;">
        We provide a wide range of export and import services tailored to meet international trade requirements with reliability, speed, and compliance.
      </p>
    </div>

    <div class="row g-4">
      <!-- Service 1 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="../assets/images/freight_forwarrding.webp" class="card-img-top" alt="Freight Forwarding">
          <div class="card-body">
            <h5 class="fw-bold">Freight Forwarding</h5>
            <p class="text-muted">
              Efficient sea, air, and land freight forwarding solutions to ensure your cargo reaches its destination safely and on time.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="../assets/images/customer_clearance.webp" class="card-img-top" alt="Customs Clearance">
          <div class="card-body">
            <h5 class="fw-bold">Customs Clearance</h5>
            <p class="text-muted">
              Hassle-free customs documentation and clearance services that comply with all import and export regulations.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="../assets/images/warehouse.webp" class="card-img-top" alt="Warehousing & Distribution">
          <div class="card-body">
            <h5 class="fw-bold">Warehousing & Distribution</h5>
            <p class="text-muted">
              Secure and efficient storage solutions with real-time tracking and timely delivery management for your shipments.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 4 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="../assets/images/export_management.webp" class="card-img-top" alt="Export Management">
          <div class="card-body">
            <h5 class="fw-bold">Export Management</h5>
            <p class="text-muted">
              Comprehensive export services from documentation to logistics planning — ensuring smooth cross-border trade operations.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 5 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="../assets/images/import_consulting.webp" class="card-img-top" alt="Import Consulting">
          <div class="card-body">
            <h5 class="fw-bold">Import Consulting</h5>
            <p class="text-muted">
              Expert advice on sourcing, documentation, and import compliance to help your business grow in global markets.
            </p>
          </div>
        </div>
      </div>

      <!-- Service 6 -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="../assets/images/cargo_insurance.webp" class="card-img-top" alt="Cargo Insurance">
          <div class="card-body">
            <h5 class="fw-bold">Cargo Insurance</h5>
            <p class="text-muted">
              Protect your goods against loss or damage during international transportation with our reliable cargo insurance services.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>

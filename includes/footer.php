<?php
// ---------- Footer Section ----------
?>

<!-- ===== Footer Section ===== -->
 <!-- WhatsApp Floating Button -->
<a href="https://wa.me/8766910241" 
   class="whatsapp-float" target="_blank" 
   title="Chat on WhatsApp">
   <i class="fab fa-whatsapp"></i>
</a>

<style>
.whatsapp-float {
  position: fixed;
  width: 60px;
  height: 60px;
  bottom: 25px;
  right: 25px;
  background-color: #25d366;
  color: #fff;
  border-radius: 50px;
  text-align: center;
  font-size: 28px;
  z-index: 100;
  box-shadow: 0 3px 10px rgba(0,0,0,0.3);
}
.whatsapp-float i {
  margin-top: 16px;
}
.whatsapp-float:hover {
  background-color: #20b358;
  color: #fff;
}
</style>

<footer class="bg-dark text-white pt-5 pb-3 mt-5">
  <div class="container">
    <div class="row gy-4">
      <!-- Company Info -->
      <div class="col-lg-4 col-md-6">
        <h5 class="fw-bold mb-3">ExportImportCo</h5>
        <p>We are a trusted export and import company offering global logistics, documentation, and customs solutions to businesses worldwide. Your gateway to seamless international trade.</p>
        <div class="mt-3">
          <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-2 col-md-6">
        <h6 class="fw-bold mb-3">Quick Links</h6>
        <ul class="list-unstyled">
          <li><a href="index.php" class="text-white text-decoration-none d-block mb-2">Home</a></li>
          <li><a href="about.php" class="text-white text-decoration-none d-block mb-2">About</a></li>
          <li><a href="services.php" class="text-white text-decoration-none d-block mb-2">Services</a></li>
          <li><a href="contact.php" class="text-white text-decoration-none d-block mb-2">Contact</a></li>
        </ul>
      </div>

      <!-- Our Services -->
      <div class="col-lg-3 col-md-6">
        <h6 class="fw-bold mb-3">Our Services</h6>
        <ul class="list-unstyled">
          <li><a href="services.php" class="text-white text-decoration-none d-block mb-2">Sea Freight</a></li>
          <li><a href="services.php" class="text-white text-decoration-none d-block mb-2">Air Freight</a></li>
          <li><a href="services.php" class="text-white text-decoration-none d-block mb-2">Customs Clearance</a></li>
          <li><a href="services.php" class="text-white text-decoration-none d-block mb-2">Warehousing</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-3 col-md-6">
        <h6 class="fw-bold mb-3">Contact Us</h6>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="fa-solid fa-location-dot me-2 text-primary"></i> 123 Global Trade Street, Mumbai, India</li>
          <li class="mb-2"><i class="fa-solid fa-phone me-2 text-primary"></i> +91 98765 43210</li>
          <li class="mb-2"><i class="fa-solid fa-envelope me-2 text-primary"></i> info@exportimportco.com</li>
          <li><i class="fa-solid fa-clock me-2 text-primary"></i> Mon - Sat: 9:00 AM - 6:00 PM</li>
        </ul>
      </div>
    </div>

    <hr class="border-secondary my-4">

    <div class="text-center">
      <p class="mb-0 small">
        &copy; <?php echo date("Y"); ?> ExportImportCo. All Rights Reserved. | Designed by <a href="#" class="text-primary text-decoration-none">Sanket Kapase</a>
      </p>
    </div>
  </div>
</footer>

<!-- ===== Bootstrap JS ===== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery (required for Bootbox) -->
 <script src="../assets/js/inquiry.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootbox (Bootstrap-styled alerts) -->
<script src="https://cdn.jsdelivr.net/npm/bootbox@5.5.2/dist/bootbox.min.js"></script>

</body>
</html>

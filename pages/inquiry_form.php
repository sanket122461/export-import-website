<?php include '../includes/header.php'; ?>
<?php include '../includes/db_connect.php'; ?>


<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-uppercase">Inquiry Form</h2>
      <p class="text-muted">Have questions about our services? Fill out the form below and our team will contact you soon.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $name = $conn->real_escape_string($_POST['name']);
          $email = $conn->real_escape_string($_POST['email']);
          $mobile = $conn->real_escape_string($_POST['mobile']);
          $service = $conn->real_escape_string($_POST['service']);
          $message = $conn->real_escape_string($_POST['message']);

          $sql = "INSERT INTO inquiries (name, email, mobile, service, message) 
                  VALUES ('$name', '$email', '$mobile', '$service', '$message')";

          if ($conn->query($sql) === TRUE) {
            echo '<div class="alert alert-success text-center">✅ Thank you! Your inquiry has been submitted successfully.</div>';
          } else {
            echo '<div class="alert alert-danger text-center">❌ Error: ' . $conn->error . '</div>';
          }
        }
        ?>

        <form method="POST" action="" class="bg-white p-4 rounded shadow-sm">
          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Mobile Number</label>
            <input type="text" name="mobile" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Select Service</label>
            <select name="service" class="form-select" required>
              <option value="">-- Choose Service --</option>
              <option value="Freight Forwarding">Freight Forwarding</option>
              <option value="Customs Clearance">Customs Clearance</option>
              <option value="Warehousing & Distribution">Warehousing & Distribution</option>
              <option value="Export Management">Export Management</option>
              <option value="Import Consulting">Import Consulting</option>
              <option value="Cargo Insurance">Cargo Insurance</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea name="message" class="form-control" rows="4" required></textarea>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary px-4">Submit Inquiry</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<?php include '../includes/footer.php'; ?>
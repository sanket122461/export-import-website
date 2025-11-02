<?php
include '../includes/db_connect.php';
include '../includes/header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel | View Inquiries</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="fw-bold mb-4 text-center text-uppercase">Inquiries Dashboard</h2>

    <table class="table table-bordered table-hover table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Service</th>
          <th>Message</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = $conn->query("SELECT * FROM inquiries ORDER BY created_at DESC");
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['mobile']}</td>
                    <td>{$row['service']}</td>
                    <td>{$row['message']}</td>
                    <td>{$row['created_at']}</td>
                  </tr>";
          }
        } else {
          echo "<tr><td colspan='7' class='text-center'>No inquiries found.</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  <?php include '../includes/footer.php'; ?>
</body>
</html>

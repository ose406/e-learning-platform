
<?php
// Configuration
require "Conn.php";
// Query to select all users
$sql = "SELECT * FROM users";
$result = $nconn->query($sql);

// Close connection
$nconn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users List</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-5">Users List</h1>
    <table class="table table-striped table-bordered table-responsive">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td></tr>";
          }
        } else {
          echo "<tr><td colspan='4'>No users found.</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>

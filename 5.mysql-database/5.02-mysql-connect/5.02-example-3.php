<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySQLi Procedural</title>
</head>

<body>
  <h1>Example (MySQLi Procedural)</h1>
  <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    // The connection will be closed automatically when the script ends. To close the connection before, use the following:
    mysqli_close($conn);
  ?>
</body>

</html>
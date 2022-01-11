<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySQLi Object-Oriented</title>
</head>

<body>
  <h1>Example (MySQLi Object-Oriented)</h1>
  <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    // The connection will be closed automatically when the script ends. To close the connection before, use the following:
    $conn->close();
  ?>
</body>

</html>
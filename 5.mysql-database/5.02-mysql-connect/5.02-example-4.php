<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDO</title>
</head>

<body>
  <h1>Example (PDO)</h1>
  <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }

    // The connection will be closed automatically when the script ends. To close the connection before, use the following:
    $conn = null;
  ?>
</body>

</html>
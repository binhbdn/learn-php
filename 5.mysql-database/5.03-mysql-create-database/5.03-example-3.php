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
      $conn = new PDO("mysql:host=$servername", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "CREATE DATABASE myDBPDO";
      // use exec() because no results are returned
      $conn->exec($sql);
      echo "Database created successfully<br>";
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
  ?>
</body>

</html>
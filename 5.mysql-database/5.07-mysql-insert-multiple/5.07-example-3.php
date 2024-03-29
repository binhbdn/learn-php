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
    $dbname = "myDBPDO";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // begin the transaction
      $conn->beginTransaction();
      // our SQL statements
      $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
      VALUES ('John', 'Doe', 'john@example.com')");
      $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
      VALUES ('Mary', 'Moe', 'mary@example.com')");
      $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
      VALUES ('Julie', 'Dooley', 'julie@example.com')");

      // commit the transaction
      $conn->commit();
      echo "New records created successfully";
    } catch(PDOException $e) {
      // roll back the transaction if something failed
      $conn->rollback();
      echo "Error: " . $e->getMessage();
    }

    $conn = null;
  ?>
</body>

</html>
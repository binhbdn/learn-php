<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDO with Prepared Statements</title>
</head>

<body>
  <h1>Example (PDO with Prepared Statements)</h1>
  <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDBPDO";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // prepare sql and bind parameters
      $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
      VALUES (:firstname, :lastname, :email)");
      $stmt->bindParam(':firstname', $firstname);
      $stmt->bindParam(':lastname', $lastname);
      $stmt->bindParam(':email', $email);

      // insert a row
      $firstname = "John";
      $lastname = "Doe";
      $email = "john@example.com";
      $stmt->execute();

      // insert another row
      $firstname = "Mary";
      $lastname = "Moe";
      $email = "mary@example.com";
      $stmt->execute();

      // insert another row
      $firstname = "Julie";
      $lastname = "Dooley";
      $email = "julie@example.com";
      $stmt->execute();

      echo "New records created successfully";
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    $conn = null;
  ?>
</body>

</html>
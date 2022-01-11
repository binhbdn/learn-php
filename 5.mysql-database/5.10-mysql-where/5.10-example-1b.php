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
    $dbname = "myDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table><tr><th>ID</th><th>Name</th></tr>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    $conn->close();
  ?>
</body>

</html>
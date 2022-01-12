<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    table,
    td,
    th {
      border: 1px solid black;
      padding: 5px;
    }

    th {
      text-align: left;
    }
  </style>
</head>

<body>

  <?php
  $q = intval($_GET['q']);
  error_reporting(0);
  mysqli_report(MYSQLI_REPORT_OFF);
  $con = mysqli_connect('localhost', 'peter', 'abc123', 'my_db');
  if (mysqli_connect_errno()) {
    throw new RuntimeException('mysqli connection error: ' . mysqli_connect_error());
  }
  mysqli_set_charset($mysqli, 'utf8mb4');
  if (mysqli_errno($mysqli)) {
    throw new RuntimeException('mysqli error: ' . mysqli_error($con));
  }
  mysqli_select_db($con, "ajax_demo");
  $sql = "SELECT * FROM user WHERE id = '" . $q . "'";
  $result = mysqli_query($con, $sql);

  echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['Hometown'] . "</td>";
    echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  mysqli_close($con);
  ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP MySQL Limit Data Selections</title>
</head>

<body>
  <p>return the first 30 records:</p>
  <p><code>$sql = "SELECT * FROM Orders LIMIT 30";</code></p>
  <p>return only 10 records, start on record 16 (OFFSET 15):</p>
  <p><code>$sql = "SELECT * FROM Orders LIMIT 10 OFFSET 15";</code></p>
  <p>a shorter syntax to achieve the same result:</p>
  <p><code>$sql = "SELECT * FROM Orders LIMIT 15, 10";</code></p>
</body>

</html>
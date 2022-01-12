<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP SimpleXML - Read From File</title>
</head>

<body>
  <h1>PHP SimpleXML - Read From File</h1>
  <?php
  $xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");
  print_r($xml);
  ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP SimpleXML - Get Node Values</title>
</head>

<body>
  <h1>PHP SimpleXML - Get Node Values</h1>
  <?php
  $xml = simplexml_load_file("../6.02-php-simplexml-parsers/note.xml") or die("Error: Cannot create object");
  echo $xml->to . "<br>";
  echo $xml->from . "<br>";
  echo $xml->heading . "<br>";
  echo $xml->body;
  ?>
</body>

</html>
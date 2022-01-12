<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Load and Output XML</title>
</head>

<body>
  <h1>Load and Output XML</h1>
  <p>We want to initialize the XML parser, load the xml, and output it:</p>
  <?php
  $xmlDoc = new DOMDocument();
  $xmlDoc->load("../6.02-php-simplexml-parsers/note.xml");

  print $xmlDoc->saveXML();
  ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Looping through XML</title>
</head>

<body>
  <h1>Looping through XML</h1>
  <p>We want to initialize the XML parser, load the XML, and loop through all elements of the &lt;note&gt; element:</p>
  <?php
  $xmlDoc = new DOMDocument();
  $xmlDoc->load("../6.02-php-simplexml-parsers/note.xml");

  $x = $xmlDoc->documentElement;
  foreach ($x->childNodes as $item) {
    print $item->nodeName . " = " . $item->nodeValue . "<br>";
  }
  ?>
</body>

</html>
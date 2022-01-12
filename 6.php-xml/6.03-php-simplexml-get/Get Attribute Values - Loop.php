<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP SimpleXML - Get Attribute Values - Loop</title>
</head>

<body>
  <h1>PHP SimpleXML - Get Attribute Values - Loop</h1>
  <p>The following example gets the attribute values of the &lt;title&gt; elements in the "books.xml" file:</p>
  <?php
  $xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");
  foreach ($xml->children() as $books) {
    echo $books->title['lang'];
    echo "<br>";
  }
  ?>
</body>

</html>
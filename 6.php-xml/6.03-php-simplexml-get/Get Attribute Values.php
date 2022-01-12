<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP SimpleXML - Get Attribute Values</title>
</head>

<body>
  <h1>PHP SimpleXML - Get Attribute Values</h1>
  <p>The following example gets the attribute value of the "category" attribute of the first &lt;book&gt; element and the attribute value of the "lang" attribute of the &lt;title&gt; element in the second &lt;book&gt; element:</p>
  <?php
  $xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");
  echo $xml->book[0]['category'] . "<br>";
  echo $xml->book[1]->title['lang'];
  ?>
</body>

</html>
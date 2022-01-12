<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP SimpleXML - Get Node Values of Specific Elements</title>
</head>

<body>
  <h1>PHP SimpleXML - Get Node Values of Specific Elements</h1>
  <p>The following example gets the node value of the &lt;title&gt; element in the first and second &lt;book&gt; elements in the "books.xml" file:&nbsp;</p>
  <?php
  $xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");
  echo $xml->book[0]->title . "<br>";
  echo $xml->book[1]->title;
  ?>
</body>

</html>
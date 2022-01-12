<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP SimpleXML - Get Node Values - Loop</title>
</head>

<body>
  <h1>PHP SimpleXML - Get Node Values - Loop</h1>
  <p>The following example loops through all the &lt;book&gt; elements in the "books.xml" file, and gets the node values of the &lt;title&gt;, &lt;author&gt;, &lt;year&gt;, and &lt;price&gt; elements:</p>
  <?php
  $xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");
  foreach ($xml->children() as $book) {
    echo $book->title . ", ";
    echo $book->author . ", ";
    echo $book->year . ", ";
    echo $book->price . "<br>";
  }
  ?>
</body>

</html>
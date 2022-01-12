<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP SimpleXML - Read From String - Error Handling</title>
</head>

<body>
  <h1>PHP SimpleXML - Read From String - Error Handling</h1>
  <?php
  libxml_use_internal_errors(true);
  $myXMLData =
    "<?xml version='1.0' encoding='UTF-8'?>
    <document>
      <user>John Doe</wronguser>
      <email>john@example.com</wrongemail>
    </document>";

  $xml = simplexml_load_string($myXMLData);
  if ($xml === false) {
    echo "Failed loading XML: ";
    foreach (libxml_get_errors() as $error) {
      echo "<br>", $error->message;
    }
  } else {
    print_r($xml);
  }
  ?>
</body>

</html>
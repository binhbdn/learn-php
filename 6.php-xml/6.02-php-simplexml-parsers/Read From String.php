<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP SimpleXML - Read From String</title>
</head>

<body>
  <h1>PHP SimpleXML - Read From String</h1>
  <?php
  $myXMLData =
    "<?xml version='1.0' encoding='UTF-8'?>
    <note>
      <to>Tove</to>
      <from>Jani</from>
      <heading>Reminder</heading>
      <body>Don't forget me this weekend!</body>
    </note>";

  $xml = simplexml_load_string($myXMLData) or die("Error: Cannot create object");
  print_r($xml);
  ?>
</body>

</html>
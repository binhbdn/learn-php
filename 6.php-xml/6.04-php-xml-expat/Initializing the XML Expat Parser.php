<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Initializing the XML Expat Parser</title>
</head>

<body>
  <h1>Initializing the XML Expat Parser</h1>
  <p>We want to initialize the XML Expat Parser in PHP, define some handlers for different XML events, and then parse the XML file.</p>
  <?php
  // Initialize the XML parser
  $parser = xml_parser_create();

  // Function to use at the start of an element
  function start($parser, $element_name, $element_attrs)
  {
    switch ($element_name) {
      case "NOTE":
        echo "-- Note --<br>";
        break;
      case "TO":
        echo "To: ";
        break;
      case "FROM":
        echo "From: ";
        break;
      case "HEADING":
        echo "Heading: ";
        break;
      case "BODY":
        echo "Message: ";
    }
  }

  // Function to use at the end of an element
  function stop($parser, $element_name)
  {
    echo "<br>";
  }

  // Function to use when finding character data
  function char($parser, $data)
  {
    echo $data;
  }

  // Specify element handler
  xml_set_element_handler($parser, "start", "stop");

  // Specify data handler
  xml_set_character_data_handler($parser, "char");

  // Open XML file
  $fp = fopen("../6.02-php-simplexml-parsers/note.xml", "r");

  // Read data
  while ($data = fread($fp, 4096)) {
    xml_parse($parser, $data, feof($fp)) or
      die(sprintf(
        "XML Error: %s at line %d",
        xml_error_string(xml_get_error_code($parser)),
        xml_get_current_line_number($parser)
      ));
  }

  // Free the XML parser
  xml_parser_free($parser);
  ?>
</body>

</html>
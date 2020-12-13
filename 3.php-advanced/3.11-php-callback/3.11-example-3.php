<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Callback Functions - Example 3</title>
</head>
<body>
    <?php
        function exclaim($str) {
            return $str . "! ";
        }
        
        function ask($str) {
            return $str . "? ";
        }
        
        function printFormatted($str, $format) {
            // Calling the $format callback function
            echo $format($str);
        }
        
        // Pass "exclaim" and "ask" as callback functions to printFormatted()
        printFormatted("Hello world", "exclaim");
        printFormatted("Hello world", "ask");
    ?>
</body>
</html>
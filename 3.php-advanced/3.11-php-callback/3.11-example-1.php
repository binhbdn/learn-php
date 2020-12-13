<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Callback Functions - Example 1</title>
</head>
<body>
    <?php
        function my_callback($item) {
            return strlen($item);
        }
        
        $strings = ["apple", "orange", "banana", "coconut"];
        $lengths = array_map("my_callback", $strings);
        print_r($lengths);
    ?>
</body>
</html>
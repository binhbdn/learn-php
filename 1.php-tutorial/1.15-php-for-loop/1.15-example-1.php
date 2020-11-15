<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP for Loop</title>
</head>
<body>
    <p>The example below displays the numbers from 0 to 10:</p>
    <?php
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
        }
    ?>
    <p>This example counts to 100 by tens:</p>
    <?php
        for ($x = 0; $x <= 100; $x+=10) {
            echo "The number is: $x <br>";
        }
    ?>
</body>
</html>
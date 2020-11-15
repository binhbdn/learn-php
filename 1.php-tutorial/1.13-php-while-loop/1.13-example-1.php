<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP while Loop</title>
</head>
<body>
    <p>The example below displays the numbers from 1 to 5:</p>
    <?php
        $x = 1;

        while($x <= 5) {
            echo "The number is: $x <br>";
            $x++;
        }
    ?>
    <p>This example counts to 100 by tens:</p>
    <?php
        $x = 0;

        while($x <= 100) {
            echo "The number is: $x <br>";
            $x+=10;
        }
    ?>
</body>
</html>
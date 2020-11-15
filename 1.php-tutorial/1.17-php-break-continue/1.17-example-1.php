<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Break and Continue</title>
</head>
<body>
    <h1>PHP Break</h1>
    <p>This example jumps out of the loop when x is equal to 4:</p>
    <?php
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
    }
    ?>
    <h1>PHP Continue</h1>
    <p>This example skips the value of 4:</p>
    <?php
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
    }
    ?>
    <h1>Break and Continue in While Loop</h1>
    <p>Break Example</p>
    <?php
    $x = 0;

    while($x < 10) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
        $x++;
    }
    ?>
    <p>Continue Example</p>
    <?php
    $x = 0;

    while($x < 10) {
        if ($x == 4) {
            $x++;
            continue;
        }
        echo "The number is: $x <br>";
        $x++;
    }
    ?>
</body>
</html>
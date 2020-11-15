<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP foreach Loop</title>
</head>
<body>
    <p>The following example will output the values of the given array ($colors):</p>
    <?php
        $colors = array("red", "green", "blue", "yellow");
        foreach ($colors as $value) {
            echo "$value <br>";
        }
    ?>
    <p>The following example will output both the keys and the values of the given array ($age):</p>
    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach($age as $x => $val) {
        echo "$x = $val<br>";
        }
    ?>
</body>
</html>
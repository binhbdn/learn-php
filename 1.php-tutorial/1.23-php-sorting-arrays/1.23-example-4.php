<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sorting Arrays - rsort() - Example 1</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Sorting Arrays - Sắp xếp mảng PHP</h1>
    <h2><span class="red">rsort()</span> - sắp xếp các mảng theo thứ tự giảm dần</h2>
    <p>Thí dụ 1:</p>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "Before sorting:<br>";
    foreach ($cars as $value) {
        echo "$value <br>";
    }
    rsort($cars);
    echo "After sorting:<br>";
    foreach ($cars as $value) {
        echo "$value <br>";
    }
    ?>
</body>
</html>
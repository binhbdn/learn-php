<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sorting Arrays - sort() - Example 1</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Sorting Arrays - Sắp xếp mảng PHP</h1>
    <h2><span class="red">sort()</span> - sắp xếp các mảng theo thứ tự tăng dần</h2>
    <p>Thí dụ 1:</p>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "Before sorting:<br>";
    foreach ($cars as $value) {
        echo "$value <br>";
    }
    sort($cars);
    echo "After sorting:<br>";
    foreach ($cars as $value) {
        echo "$value <br>";
    }
    ?>
</body>
</html>
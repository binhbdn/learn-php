<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sorting Arrays - sort() - Example 2</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Sorting Arrays - Sắp xếp mảng PHP</h1>
    <h2><span class="red">sort()</span> - sắp xếp các mảng theo thứ tự tăng dần</h2>
    <p>Thí dụ 2:</p>
    <?php
    $numbers = array(4, 6, 2, 22, 11);
    echo "Before sorting:<br>";
    foreach ($numbers as $value) {
        echo "$value <br>";
    }
    sort($numbers);
    echo "After sorting:<br>";
    foreach ($numbers as $value) {
        echo "$value <br>";
    }
    ?>
</body>
</html>
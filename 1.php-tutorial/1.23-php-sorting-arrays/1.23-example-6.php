<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sorting Arrays - asort() - Example 1</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Sorting Arrays - Sắp xếp mảng PHP</h1>
    <h2><span class="red">asort()</span> - sắp xếp các mảng kết hợp theo thứ tự tăng dần, theo giá trị</h2>
    <p>Thí dụ 1:</p>
    <?php
    $age = array("Peter"=>"37", "Ben"=>"35", "Joe"=>"43");
    echo "Before sorting:<br>";
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    asort($age);
    echo "After sorting:<br>";
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?>
</body>
</html>
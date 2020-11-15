<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Through an Indexed Array</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Loop Through an Indexed Array - Lặp qua một mảng được lập chỉ mục</h1>
    <p>Để lặp qua và in tất cả các giá trị của một mảng được lập chỉ mục, bạn có thể sử dụng một vòng lặp <span class="red">for</span>, như sau:</p>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);

    for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
    ?>
</body>
</html>
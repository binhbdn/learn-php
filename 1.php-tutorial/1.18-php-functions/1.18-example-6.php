<?php declare(strict_types=1); // strict requirement?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions - Returning values</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Các hàm PHP - Trả về giá trị</h1>
    <p>Để cho phép một hàm trả về một giá trị, hãy sử dụng câu lệnh <span class="red">return</span>.</p>
    <?php
    function sum(int $x, int $y) {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);
    ?>
</body>
</html>
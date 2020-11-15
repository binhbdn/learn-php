<?php declare(strict_types=1); // strict requirement?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Return Type Declarations</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Return Type Declarations - Khai báo kiểu dữ liệu trả về của hàm trong PHP</h1>
    <p>Để khai báo kiểu cho hàm trả về, hãy thêm dấu hai chấm ( <span class="red">:</span> ) và kiểu ngay trước dấu ngoặc nhọn mở ( <span class="red">{</span> ) khi khai báo hàm.</p>
    <p>Thí dụ 1:</p>
    <?php
    function addNumbers(float $a, float $b) : float {
        return $a + $b;
    }
    echo addNumbers(1.2, 5.2);
    ?>
    <p>Thí dụ 2: Bạn có thể chỉ định kiểu trả về khác với kiểu đối số, nhưng hãy đảm bảo rằng kiểu trả về là đúng.</p>
    <?php
    function add_numbers(float $a, float $b) : int {
        return (int)($a + $b);
    }
    echo add_numbers(1.2, 5.2);
    ?>
</body>
</html>
<?php declare(strict_types=1); // strict requirement?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing Arguments by Reference</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Passing Arguments by Reference - Truyền đối số theo tham chiếu</h1>
    <p>Trong PHP, các đối số thường được truyền theo giá trị, có nghĩa là một bản sao của giá trị được sử dụng trong hàm và biến được truyền vào hàm không thể thay đổi.</p>
    <p>Khi đối số hàm được truyền bằng tham chiếu, các thay đổi đối với đối số cũng thay đổi biến được truyền vào. Để biến đối số hàm thành tham chiếu, toán tử <span class="red">&</span> được sử dụng:</p>
    <p>Thí dụ: Sử dụng đối số truyền qua tham chiếu để cập nhật một biến.</p>
    <?php
    function add_five(&$value) {
        $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num;
    ?>
</body>
</html>
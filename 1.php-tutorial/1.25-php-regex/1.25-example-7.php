<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Regular Expressions - Grouping</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Regular Expressions - Grouping / Phân nhóm</h1>
    <p>Bạn có thể sử dụng dấu ngoặc đơn () để áp dụng số lượng cho toàn bộ các mẫu. Chúng cũng có thể được sử dụng để chọn các phần của mẫu được sử dụng làm đối sánh.</p>
    <p>Ví dụ sử dụng <span class="red">Grouping ()</span></p>
    <p>
        <?php
            $str = "Apples and bananas.";
            $pattern = "/ba(na){2}/i";
            echo preg_match($pattern, $str); // Outputs 1
        ?>
    </p>
</body>
</html>
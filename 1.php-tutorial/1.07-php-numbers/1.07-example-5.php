<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP NaN</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP NaN</h1>
    <p>NaN là viết tắt của Not a Number.</p>
    <p>NaN được sử dụng cho các phép toán bất khả thi.</p>
    <p>PHP có function sau để kiểm tra xem giá trị có phải là số không:</p>
    <ul>
        <li class="red">is_nan()</li>
    </ul>
    <p>Tuy nhiên, hàm <span class="red">var_dump()</span> trong PHP trả về kiểu dữ liệu và giá trị:</p>
    <p>Thí dụ Phép tính không hợp lệ sẽ trả về giá trị NaN:</p>
    <?php
        $x = acos(8);
        echo "\$x = acos(8);<br>";
        echo "var_dump(\$x);<br>";
        var_dump($x);
        echo "<br>var_dump(is_nan(\$x));<br>";
        var_dump(is_nan($x));
    ?>
</body>

</html>
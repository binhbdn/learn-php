<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Infinity</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP Infinity / Số vô hạn PHP</h1>
    <p>Giá trị số lớn hơn <span class="red">PHP_FLOAT_MAX</span> được coi là vô hạn.</p>
    <p>PHP có các functions sau để kiểm tra xem giá trị số là hữu hạn hay vô hạn:</p>
    <ul>
        <li class="red">is_finite()</li>
        <li class="red">is_infinite()</li>
    </ul>
    <p>Tuy nhiên, hàm <span class="red">var_dump()</span> trong PHP trả về kiểu dữ liệu và giá trị:</p>
    <?php
        $x = 1.9e411;
        echo "\$x = 1.9e411;<br>";
        echo "var_dump(\$x);<br>";
        var_dump($x);
        echo "<br>var_dump(is_finite(\$x));<br>";
        var_dump(is_finite($x));
        echo "<br>var_dump(is_infinite(\$x));<br>";
        var_dump(is_infinite($x));
    ?>
</body>

</html>
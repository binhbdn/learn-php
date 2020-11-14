<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Casting Strings and Floats to Integers</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP Casting Strings and Floats to Integers</h1>
    <p>Đôi khi bạn cần truyền một giá trị số sang một kiểu dữ liệu khác.</p>
    <p>Hàm <span class="red">(int)</span>, <span class="red">(integer)</span> hoặc <span class="red">intval()</span> thường được sử dụng để chuyển đổi một giá trị thành một số nguyên.</p>
    <p>Thí dụ Truyền float và string thành số nguyên:</p>
    <?php
        // Cast float to int
        $x = 23465.768;
        $int_cast = (int)$x;
        echo $int_cast;

        echo "<br>";

        // Cast string to int
        $x = "23465.768";
        $int_cast = (integer)$x;
        echo $int_cast;
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Boolean</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP Boolean</h1>
    <p>Boolean đại diện cho hai trạng thái có thể có: <span class="red">TRUE</span> hoặc <span class="red">FALSE</span>.</p>
    <p>Boolean thường được sử dụng trong thử nghiệm có điều kiện. Bạn sẽ tìm hiểu thêm về kiểm thử có điều kiện trong chương sau của hướng dẫn này.</p>
    <p>Trong ví dụ sau, <span class="red">$x</span> và <span class="red">$y</span> là 2 biến Boolean. Hàm <span class="red">var_dump()</span> trong PHP trả về kiểu dữ liệu và giá trị:</p>
    <p>Thí dụ</p>
    <?php
        $x = true;
        $y = false;
        var_dump($x);
        echo "<br>";
        var_dump($y);
    ?>
</body>

</html>
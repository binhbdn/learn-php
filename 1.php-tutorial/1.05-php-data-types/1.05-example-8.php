<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP NULL Value</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP NULL Value / Giá trị PHP NULL</h1>
    <p>Null là một kiểu dữ liệu đặc biệt chỉ có thể có một giá trị: NULL.</p>
    <p>Một biến kiểu dữ liệu NULL là một biến không có giá trị được gán cho nó.</p>
    <p>Mẹo: Nếu một biến được tạo mà không có giá trị, nó sẽ tự động được gán giá trị NULL.</p>
    <p>Các biến cũng có thể được làm trống bằng cách đặt giá trị thành NULL:</p>
    <p>Trong ví dụ sau, biến <span class="red">$x</span> được làm trống bằng cách đặt giá trị thành NULL. Hàm <span class="red">var_dump()</span> trong PHP trả về kiểu dữ liệu và giá trị:</p>
    <p>Thí dụ</p>
    <?php
    $x = "Hello world!";
        echo "$x<br>";
        var_dump($x);
        echo "<br>";
        $x = null;
        echo "$x<br>";
        var_dump($x);
    ?>
</body>

</html>
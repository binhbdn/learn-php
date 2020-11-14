<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Numbers</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP Numbers / Số PHP</h1>
    <p>In this chapter we will look in depth into Integers, Floats, and Number Strings.</p>
    <p>Trong chương này, chúng ta sẽ xem xét sâu hơn về Số nguyên, Số thực và Chuỗi số.</p>
    <h2>PHP Numbers</h2>
    <p>Một điều cần chú ý về PHP là nó cung cấp tính năng chuyển đổi kiểu dữ liệu tự động.</p>
    <p>Vì vậy, nếu bạn gán một giá trị nguyên cho một biến, kiểu của biến đó sẽ tự động là một số nguyên.</p>
    <p>Sau đó, nếu bạn gán một chuỗi cho cùng một biến, kiểu sẽ thay đổi thành chuỗi.</p>
    <p>Chuyển đổi tự động này đôi khi có thể phá vỡ mã của bạn.</p>
    <p>Thí dụ</p>
    <?php
        $x = 1981;
        var_dump($x);
        echo "<br>";
        $x = "binhbdn";
        var_dump($x);
    ?>
</body>

</html>
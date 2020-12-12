<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date - Get a Date</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Date - Get a Date</h1>
    <ul>
        <li>d - Đại diện cho ngày trong tháng (01 đến 31)</li>
        <li>m - Đại diện cho một tháng (01 đến 12)</li>
        <li>Y - Đại diện cho một năm (bằng bốn chữ số)</li>
        <li>l (chữ 'L' viết thường) - Đại diện cho ngày trong tuần</li>
    </ul>
    <p>Các ký tự khác, như "/", "." Hoặc "-" cũng có thể được chèn vào giữa các ký tự để thêm định dạng bổ sung</p>
    <?php
        echo "Today is " . date("d/m/Y") . "<br>";
        echo "Today is " . date("d.m.Y") . "<br>";
        echo "Today is " . date("d-m-Y") . "<br>";
        echo "Today is " . date("l-d-m-Y");
    ?>
    <p>Automatic Copyright Year</p>
    <p>&copy; 2010-<?php echo date("Y");?></p>
</body>
</html>
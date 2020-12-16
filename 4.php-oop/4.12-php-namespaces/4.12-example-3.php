<?php
    include "Html.php";

    $table = new Html\Table();
    $table->title = "My table";
    $table->numRows = 5;

    $row = new Html\Row();
    $row->numCells = 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Namespaces</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Namespaces / PHP OOP - Không gian tên</h1>
    <h2 class="red">PHP OOP - Using Namespaces</h2>
    <p>Bất kỳ mã lệnh nào theo sau một khai báo namespace đang hoạt động bên trong không gian tên, vì vậy các lớp thuộc không gian tên có thể được khởi tạo mà không cần bất kỳ định tính nào.</p>
    <p class="red">Để truy cập các lớp từ bên ngoài một không gian tên, lớp đó cần có không gian tên được gắn vào nó.</p>
    <h2 class="red">Ví dụ 3</h2>
    <?php $table->message(); ?>
    <?php $row->message(); ?>
</body>
</html>
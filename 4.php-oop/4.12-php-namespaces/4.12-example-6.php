<?php
    include "Html.php";
    use Html\Table as T;
    $table = new T();
    $table->title = "My table";
    $table->numRows = 5;
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
    <h2 class="red">PHP OOP - Class Alias / Bí danh lớp</h2>
    <p>It can be useful to give a namespace or class an alias to make it easier to write. This is done with the use keyword:</p>
    <p class="red">Có thể hữu ích khi gán cho không gian tên hoặc lớp một bí danh nào đó cho để việc viết mã dễ dàng hơn. Điều này được thực hiện với từ khóa use:</p>
    <h2 class="red">Ví dụ 5 (Đặt bí danh cho lớp:)</h2>
    <?php $table->message(); ?>
</body>
</html>
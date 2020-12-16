<?php
    namespace Html;
    include "Html.php";

    $table = new Table();
    $table->title = "My table";
    $table->numRows = 5;

    $row = new Row();
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
    <p>When many classes from the same namespace are being used at the same time, it is easier to use the namespace keyword.</p>
    <p class="red">Khi nhiều lớp từ cùng một không gian tên đang được sử dụng cùng một lúc, thì việc sử dụng từ khóa namespace sẽ dễ dàng hơn.</p>
    <h2 class="red">Ví dụ 4</h2>
    <?php $table->message(); ?>
    <?php $row->message(); ?>
</body>
</html>
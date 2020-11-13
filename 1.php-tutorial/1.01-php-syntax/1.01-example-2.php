<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Syntax - PHP Case Sensitivity</title>
    <style>
        .blue {color: blue;}
    </style>
</head>
<body>
    <h1>My second PHP page</h1>
    <h2>Phân biệt chữ hoa chữ thường trong PHP</h2>
    <?php
        $color = "red";
        echo '<span class="blue">Hello World!</span><br>';
        ECHO "Hello World!<br>";
        EcHo "Hello World!<br>";
        
        echo "My car is " . $color . "<br>";
        echo "My house is " . $COLOR . "<br>";
        echo "My boat is " . $coLOR . "<br>";
    ?>
    <p>Trong PHP, tên từ khóa (ví dụ như if, else, while, echo, vv), tên các lớp, tên các hàm được xây dựng sẵn, và tên các hàm do người dùng định nghĩa KHÔNG phân biệt chữ hoa chữ thường.</p>
    <p>Lưu ý: Tuy nhiên, tất cả các tên biến đều phân biệt chữ hoa chữ thường! $color, $COLOR và $coLOR được coi là ba biến khác nhau</p>
</body>
</html>
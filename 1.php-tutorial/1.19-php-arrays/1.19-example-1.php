<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Các hàm PHP</h1>
    <p>Một mảng lưu trữ nhiều giá trị trong một biến duy nhất.</p>
    <p>Trong PHP, hàm <span class="red">array()</span> được sử dụng để tạo một mảng</p>
    <p>Thí dụ</p>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
    <p>Trong PHP, có ba loại mảng:</p>
    <ul>
        <li><span class="red">Indexed arrays</span> - Mảng có chỉ mục số</li>
        <li><span class="red">Associative arrays</span> - Mảng có các khóa được đặt tên</li>
        <li><span class="red">Multidimensional arrays</span> - Mảng chứa một hoặc nhiều mảng</li>
    </ul>
    <h1>Toàn bộ tham chiếu mảng PHP</h1>
    <a href="https://www.w3schools.com/php/php_ref_array.asp">Tham chiếu mảng PHP</a>
</body>
</html>
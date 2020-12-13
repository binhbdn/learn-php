<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filters - PHP filter_var() Function - Sanitize a String</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP <span class="red">filter_var()</span> Function</h1>
    <p>Hàm <span class="red">filter_var()</span> dùng để xác thực và làm sạch dữ liệu</p>
    <p>Hàm <span class="red">filter_var()</span> dùng để xác thực và làm sạch dữ liệu của một biến duy nhất với một bộ lọc được chỉ định, nó cần 2 đối số:</p>
    <ul>
        <li>Biến bạn muốn kiểm tra</li>
        <li>Loại kiểm tra được sử dụng</li>
    </ul>
    <h2 class="red">Sanitize a String / Làm sạch một chuỗi</h2>
    <p>Ví dụ sau sử dụng hàm <span class="red">filter_var()</span> để xóa tất cả các thẻ HTML khỏi một chuỗi:</p>
    <span class="red">
        <?php
        $str = "<h1>Hello World!</h1>";
        $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        echo $newstr;
        ?>
    </span>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Superglobal - $_SERVER</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Superglobal - <span class="red">$_SERVER</span></h1>
    <p><span class="red">$_SERVER</span> là một biến siêu toàn cục của PHP chứa thông tin về <span class="red">headers</span>, <span class="red">paths</span>, và <span class="red">script locations</span>.</p>
    <p>Ví dụ dưới đây cho thấy cách sử dụng một số phần tử trong <span class="red">$_SERVER</span>:</p>
    <?php
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    ?>
    <h1>Bảng liệt kê các phần tử quan trọng nhất có thể đi vào bên trong <span class="red">$_SERVER</span>:</h1>
    <a href="https://www.w3schools.com/php/php_superglobals_server.asp">Link</a>
</body>
</html>
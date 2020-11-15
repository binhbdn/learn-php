<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Superglobal - $_GET</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Superglobal - <span class="red">$_GET</span></h1>
    <p><span class="red">$_GET</span> là một biến siêu toàn cục của PHP được sử dụng để thu thập dữ liệu biểu mẫu sau khi gửi biểu mẫu HTML với method = "get".</p>
    <p><span class="red">$_GET</span> cũng có thể thu thập dữ liệu được gửi trong URL.</p>
    <p>Thí dụ:</p>
    <a href="1.24-example-7.php?subject=PHP&web=W3schools.com">Test <span class="red">$_GET</span></a>
    <p>Khi người dùng nhấp vào liên kết "Test <span class="red">$_GET</span>", các tham số "<span class="red">subject</span>" và "<span class="red">web</span>" được gửi đến "<span class="red">1.24-example-7.php</span>" và sau đó bạn có thể truy cập các giá trị của chúng trong "<span class="red">1.24-example-7.php</span>" bằng <span class="red">$_GET</span>.</p>
</body>
</html>
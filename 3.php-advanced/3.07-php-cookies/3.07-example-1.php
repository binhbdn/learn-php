<!DOCTYPE html>
<?php
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Create/Retrieve a Cookie</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Create/Retrieve a Cookie - PHP Tạo / Lấy Cookie</h1>
    <h2>Syntax Create Cookies With PHP</h2>
    <p>Một cookie được tạo với hàm <span class="red">setcookie()</span></p>
    <p class="red">setcookie(name, value, expire, path, domain, secure, httponly);</p>
    <p class="red">Chỉ tham số tên là bắt buộc. Tất cả các thông số khác là tùy chọn.</p>
    <h2>Ví dụ</h2>
    <p>Ví dụ sau tạo một cookie có tên "user" với giá trị "John Doe". Cookie sẽ hết hạn sau 30 ngày (86400 * 30). "/" Có nghĩa là cookie có sẵn trong toàn bộ trang web (nếu không, hãy chọn thư mục bạn thích).</p>
    <p>Sau đó, chúng ta truy xuất giá trị của cookie "user" (sử dụng biến toàn cục <span class="red">$_COOKIE</span>). Chúng ta cũng sử dụng hàm <span class="red">isset()</span> để tìm hiểu xem cookie có được đặt hay không.</p>

    <?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
    <p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
    <h2 class="red">Note: The setcookie() function must appear BEFORE the &lt;html> tag.</h2>
    <h2 class="red">Lưu ý: Giá trị của cookie tự động được mã hóa URL khi gửi cookie và tự động được giải mã khi nhận được (để ngăn chặn mã hóa URL, hãy sử dụng hàm setrawcookie() để thay thế cho hàm setcookie()).</h2>
</body>
</html>
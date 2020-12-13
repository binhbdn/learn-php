<!DOCTYPE html>
<?php
    $cookie_name = "user";
    $cookie_value = "Bùi Đoàn Nghĩa Bình";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify a Cookie Value</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Modify a Cookie Value - Sửa đổi giá trị cookie</h1>
    <p>Để sửa đổi cookie, chỉ cần đặt (lại) cookie bằng hàm <span class="red">setcookie()</span>:</p>
    <?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filters - PHP filter_var() Function - Validate an IP Address</title>
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
    <h2 class="red">Validate an IP Address / Xác thực địa chỉ IP</h2>
    <p>Ví dụ sau sử dụng hàm <span class="red">filter_var()</span> để kiểm tra xem biến <span class="red">$ip</span> có phải là địa chỉ IP hợp lệ hay không:</p>
    <span class="red">
        <?php
            $ip = "127.0.0.1";
            echo "\$ip = " . $ip . "<br>";
            if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
                echo("$ip is a valid IP address");
            } else {
                echo("$ip is not a valid IP address");
            }
        ?>
    </span>
    </span>
</body>
</html>
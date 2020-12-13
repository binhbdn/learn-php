<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filters - PHP filter_var() Function - Sanitize and Validate a URL</title>
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
    <h2 class="red">Sanitize and Validate a URL / Làm sạch và xác thực URL</h2>
    <p>Ví dụ sau sử dụng hàm <span class="red">filter_var()</span> để xóa tất cả các ký tự không hợp lệ khỏi URL, sau đó kiểm tra xem biến <span class="red">$url</span> có phải là địa URL hợp lệ hay không:</p>
    <span class="red">
        <?php
            $url = "https://www.w3schools.com";

            // Remove all illegal characters from a url
            $url = filter_var($url, FILTER_SANITIZE_URL);
            
            // Validate url
            if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
                echo("$url is a valid URL");
            } else {
                echo("$url is not a valid URL");
            }
        ?>
    </span>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filters - PHP filter_var() Function - Sanitize and Validate an Email Address</title>
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
    <h2 class="red">Sanitize and Validate an Email Address / Làm sạch và xác thực địa chỉ email</h2>
    <p>Ví dụ sau sử dụng hàm <span class="red">filter_var()</span> để xóa tất cả các ký tự không hợp lệ khỏi biến <span class="red">$email</span>, sau đó kiểm tra xem đó có phải là địa chỉ email hợp lệ hay không:</p>
    <span class="red">
        <?php
            $email = "   \   \john.doe@example.com   ";
            echo "Input \$email = " . $email . "<br>";

            echo "Remove all illegal characters from email<br>";
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            echo "Now, \$email = " . $email . "<br>";

            echo "Validate e-mail<br>";
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                echo("$email is a valid email address<br>");
            } else {
                echo("$email is not a valid email address<br>");
            }
            echo "Finally, \$email = " . $email . "<br>";
        ?>
    </span>
    </span>
</body>
</html>
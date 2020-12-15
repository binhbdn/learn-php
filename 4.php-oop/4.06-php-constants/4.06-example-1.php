<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Class Constants</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Class Constants</h1>
    <p>Chúng ta có thể truy cập một hằng số từ bên ngoài lớp bằng cách sử dụng tên lớp, theo sau là <span class="red">toán tử phân giải phạm vi (::)</span> theo sau là tên hằng, như sau:</p>
    <?php
        class Goodbye {
            const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
        }
        
        echo Goodbye::LEAVING_MESSAGE;
    ?>
</body>
</html>
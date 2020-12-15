<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Static Methods</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Static Methods / PHP - Phương thức tĩnh</h1>
    <p class="red">Phương thức static có thể được gọi trực tiếp - mà không cần tạo một thể hiện của lớp trước (không cần tạo đối tượng).</p>
    <p>Phương thức tĩnh được khai báo với từ khóa <span class="red">static</span></p>
    <p class="red">Để truy cập một phương thức tĩnh, hãy sử dụng tên lớp, dấu hai chấm đôi (::) và tên phương thức</p>
    <h2 class="red">Ví dụ 1</h2>
    <?php
        class greeting {
            public static function welcome() {
                echo "Hello World!";
            }
        }
        
        // Call static method
        greeting::welcome();
    ?>
</body>
</html>
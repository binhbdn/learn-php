<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Static Properties</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Static Properties / PHP OOP - Thuộc tính tĩnh</h1>
    <p class="red">Thuộc tính static có thể được gọi trực tiếp - mà không cần tạo một thể hiện của một lớp (không cần tạo đối tượng).</p>
    <p>Thuộc tính tĩnh được khai báo với từ khóa <span class="red">static</span></p>
    <p class="red">Để truy cập một thuộc tính tĩnh, hãy sử dụng tên lớp, dấu hai chấm đôi (::) và tên thuộc tính</p>
    <h2 class="red">Ví dụ 1</h2>
    <?php
        class pi {
            public static $value = 3.14159;
        }
        
        // Get static property
        echo pi::$value;
    ?>
</body>
</html>
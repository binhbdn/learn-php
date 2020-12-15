<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - More on Static Methods</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - More on Static Methods</h1>
    <p>Một lớp có thể có cả phương thức tĩnh và phương thức không tĩnh.</p>
    <p class="red">Một phương thức tĩnh có thể được truy cập từ một phương thức trong cùng một lớp bằng cách sử dụng từ khóa self và dấu hai chấm đôi (::)</p>
    <h2 class="red">Ví dụ 2</h2>
    <?php
        class greeting {
            public static function welcome() {
                echo "Hello World!";
            }

            public function __construct() {
                self::welcome();
            }
        }
        
        new greeting();
    ?>
</body>
</html>
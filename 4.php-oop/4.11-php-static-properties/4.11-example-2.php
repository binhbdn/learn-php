<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - More on Static Properties</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - More on Static Properties / PHP OOP - Thông tin thêm về thuộc tính tĩnh</h1>
    <p>Một lớp có thể có cả thuộc tính tĩnh và không tĩnh.</p>
    <p class="red">Một thuộc tính tĩnh có thể được truy cập từ một phương thức trong cùng một lớp bằng cách sử dụng từ khóa self và dấu hai chấm đôi (::)</p>
    <h2 class="red">Ví dụ 2</h2>
    <?php
        class pi {
            public static $value=3.14159;
            public function staticValue() {
                return self::$value;
            }
        }
        
        $pi = new pi();
        echo $pi->staticValue();
    ?>
</body>
</html>
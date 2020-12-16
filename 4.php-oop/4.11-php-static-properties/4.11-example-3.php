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
    <p class="red">Để gọi một thuộc tính tĩnh từ một lớp con, hãy sử dụng từ khóa parent bên trong lớp con</p>
    <h2 class="red">Ví dụ 3</h2>
    <?php
        class pi {
            public static $value=3.14159;
        }
        
        class x extends pi {
            public function xStatic() {
                return parent::$value;
            }
        }
        
        // Get value of static property directly via child class
        echo x::$value;
        
        // or get value of static property via xStatic() method
        $x = new x();
        echo "<br>";
        echo $x->xStatic();
    ?>
</body>
</html>
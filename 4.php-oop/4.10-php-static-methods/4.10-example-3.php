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
    <p class="red">Các phương thức tĩnh cũng có thể được gọi từ các phương thức trong các lớp khác. Để làm được điều này, phương thức tĩnh phải là public.</p>
    <h2 class="red">Ví dụ 3</h2>
    <?php
        class greeting {
            public static function welcome() {
                echo "Hello World!";
            }
        }
        
        class SomeOtherClass {
            public function message() {
                greeting::welcome();
            }
        }

        $obj = new SomeOtherClass();
        $obj -> message();
    ?>
</body>
</html>
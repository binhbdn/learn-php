<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Classes and Objects - instanceof</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - instanceof</h1>
    <p>Bạn có thể sử dụng từ khóa <span class="red">instanceof</span> để kiểm tra xem một đối tượng có thuộc một lớp cụ thể hay không:</p>
    <?php
        class Fruit {
            public $name;
        }
        $apple = new Fruit();
    
        var_dump($apple instanceof Fruit);
    ?>
</body>
</html>
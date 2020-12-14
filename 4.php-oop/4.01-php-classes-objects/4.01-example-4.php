<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Classes and Objects - The $this Keyword</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - The $this Keyword</h1>
    <p>Từ khóa <span class="red">$this</span> đề cập đến đối tượng hiện tại và chỉ có sẵn bên trong các phương thức.</p>
    <p>Hãy xem ví dụ sau:</p>
    <?php
        class Fruit {
            public $name;
        }
        $apple = new Fruit();
    ?>
    <p>chúng ta có thể thay đổi giá trị của thuộc tính <span class="red">$name</span> ở đâu? Có hai cách:</p>
    <h2 class="red">Cách 1. Bên trong lớp (bằng cách thêm phương thức set_name() và sử dụng $this):</h2>
    <?php
        class Fruit1 {
            public $name;
            function set_name($name) {
                $this->name = $name;
            }
        }
        $apple = new Fruit1();
        $apple->set_name("Apple");
    ?>
    <h2 class="red">Cách 2. Bên ngoài lớp (bằng cách thay đổi trực tiếp giá trị thuộc tính):</h2>
    <?php
        class Fruit2 {
            public $name;
        }
        $apple = new Fruit2();
        $apple->name = "Apple";
    ?>
</body>
</html>
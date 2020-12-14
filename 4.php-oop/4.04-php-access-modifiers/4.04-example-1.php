<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Access Modifiers</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Access Modifiers</h1>
    <ul>
        <li><span class="red">public</span> thuộc tính hoặc phương thức có thể được truy cập từ mọi nơi. Đây là mặc định</li>
        <li><span class="red">protected</span> thuộc tính hoặc phương thức có thể được truy cập trong lớp và bởi các lớp dẫn xuất từ ​​lớp đó</li>
        <li><span class="red">private</span> thuộc tính hoặc phương thức CHỈ có thể được truy cập trong lớp</li>
    </ul>
    <h2 class="red">Example 1</h2>
    <?php
        class Fruit {
            public $name;
            protected $color;
            private $weight;
        }
        
        $mango = new Fruit();
        $mango->name = 'Mango'; // OK
        echo $mango->name;
        $mango->color = 'Yellow'; // ERROR
        echo $mango->color;
        $mango->weight = '300'; // ERROR
        echo $mango->weight;
    ?>
</body>
</html>
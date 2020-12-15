<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Inheritance</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Inheritance</h1>
    <p>Kế thừa trong OOP = Khi một lớp dẫn xuất từ ​​một lớp khác.</p>
    <p>Lớp con sẽ kế thừa tất cả các thuộc tính và phương thức <span class="red">public</span> và <span class="red">protected</span> từ lớp cha. Ngoài ra, nó có thể có các thuộc tính và phương thức riêng.</p>
    <p>Một lớp kế thừa được xác định bằng cách sử dụng từ khóa <span class="red">extends</span>.</p>
    <h2 class="red">Ví dụ</h2>
    <?php
        class Fruit {
            public $name;
            public $color;
            public function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            }
            public function intro() {
                echo "The fruit is {$this->name} and the color is {$this->color}.";
            }
        }
        
        // Strawberry is inherited from Fruit
        class Strawberry extends Fruit {
            public function message() {
                echo "Am I a fruit or a berry? ";
            }
        }
        $strawberry = new Strawberry("Strawberry", "red");
        $strawberry->message();
        $strawberry->intro();
    ?>
</body>
</html>
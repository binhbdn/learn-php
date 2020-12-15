<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Overriding Inherited Methods</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Overriding Inherited Methods</h1>
    <p>Các phương thức kế thừa có thể được ghi đè bằng cách định nghĩa lại các phương thức (sử dụng cùng tên) trong lớp con.</p>
    <p>Nhìn vào ví dụ dưới đây. Các phương thức __construct() và intro() trong lớp con (Strawberry) sẽ ghi đè các phương thức __construct() và intro() trong lớp cha (Fruit):</p>
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
        
        class Strawberry extends Fruit {
            public $weight;
            public function __construct($name, $color, $weight) {
                $this->name = $name;
                $this->color = $color;
                $this->weight = $weight;
            }
            public function intro() {
                echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
            }
        }
        
        $strawberry = new Strawberry("Strawberry", "red", 50);
        $strawberry->intro();
    ?>
</body>
</html>
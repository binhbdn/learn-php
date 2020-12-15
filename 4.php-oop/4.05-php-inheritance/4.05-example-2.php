<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Inheritance and the Protected Access Modifier</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Inheritance and the Protected Access Modifier</h1>
    <p>Chúng ta đã biết rằng các thuộc tính hoặc phương thức <span class="red">protected</span> có thể được truy cập trong lớp và bởi các lớp dẫn xuất <span class="red">(tức lớp kế thừa)</span> từ ​​lớp đó. Điều đó nghĩa là gì?, xem ví dụ dưới đây để hiểu thêm</p>
    <p>Trong ví dụ dưới đây, nếu chúng ta cố gắng gọi một phương thức <span class="red">protected</span> (intro()) từ bên ngoài lớp, chúng ta sẽ nhận được một lỗi, gọi phương thức <span class="red">public</span> từ bên ngoài lớp thì được!</p>
    <p>Hãy xem một ví dụ tiếp theo để hiểu thêm.</p>
    <?php
        class Fruit {
            public $name;
            public $color;
            public function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            }
            protected function intro() {
                echo "The fruit is {$this->name} and the color is {$this->color}.";
            }
        }
          
        class Strawberry extends Fruit {
            public function message() {
                echo "Am I a fruit or a berry? ";
            }
        }
        
        // Try to call all three methods from outside class
        $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
        $strawberry->message(); // OK. message() is public
        $strawberry->intro(); // ERROR. intro() is protected
    ?>
</body>
</html>
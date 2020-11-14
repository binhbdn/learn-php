<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Object</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP Object / Đối tượng PHP</h1>
    <p>Class / lớp và object / đối tượng là hai khía cạnh chính của lập trình hướng đối tượng.</p>
    <p>A class is a template for objects, and an object is an instance of a class.</p>
    <p>Một lớp là một khuôn mẫu cho các đối tượng và một đối tượng là một thể hiện của một lớp.</p>
    <p>When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.</p>
    <p>Khi các đối tượng riêng lẻ được tạo, chúng kế thừa tất cả các thuộc tính và hành vi từ lớp, nhưng mỗi đối tượng sẽ có các giá trị khác nhau cho các thuộc tính.</p>
    <p>Giả sử chúng ta có một lớp tên là Car. Car có thể có các thuộc tính như model, color v.v...</p>
    <p>Chúng ta có thể xác định các biến như <span class="red">$model</span>, <span class="red">$color</span> v.v... để giữ các giá trị của các thuộc tính này.</p>
    <p>Khi các đối tượng riêng lẻ (Volvo, BMW, Toyota, v.v.) được tạo, chúng kế thừa tất cả các thuộc tính và hành vi từ lớp, nhưng mỗi đối tượng sẽ có các giá trị khác nhau cho các thuộc tính.</p>
    <p>Nếu bạn tạo một hàm <span class="red">__construct()</span>, PHP sẽ tự động gọi hàm này khi bạn tạo một đối tượng từ một lớp.</p>
    <p>Trong ví dụ sau, <span class="red">$myCar</span> là một đối tượng. Hàm <span class="red">var_dump()</span> trong PHP trả về kiểu dữ liệu và giá trị:</p>
    <p>Thí dụ</p>
    <?php
        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
                $this->color = $color;
                $this->model = $model;
            }
            public function message() {
                return "My car is a " . $this->color . " " . $this->model . "!";
            }
        }
        
        $myCar = new Car("black", "Volvo");
        echo $myCar -> message();
        echo "<br>";
        var_dump($myCar);
        echo "<br>";

        $myCar = new Car("red", "Toyota");
        echo $myCar -> message();
        echo "<br>";
        var_dump($myCar);
    ?>
</body>

</html>
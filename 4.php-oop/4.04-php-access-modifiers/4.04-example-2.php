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
    <h2 class="red">Example 2</h2>
    <?php
        class Fruit {
            public $name;
            public $color;
            public $weight;

            function set_name($n) {  // a public function (default)
                $this->name = $n;
            }
            protected function set_color($n) { // a protected function
                $this->color = $n;
            }
            private function set_weight($n) { // a private function
                $this->weight = $n;
            }
        }
        
        $mango = new Fruit();
        $mango->set_name('Mango'); // OK
        echo $mango->name;
        $mango->set_color('Yellow'); // ERROR
        echo $mango->color;
        $mango->set_weight('300'); // ERROR
        echo $mango->weight;
    ?>
</body>
</html>
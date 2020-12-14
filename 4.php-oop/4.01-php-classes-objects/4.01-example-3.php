<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Classes and Objects - Add Methods to a Class</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Add Methods to a Class</h1>
    <?php
        class Fruit {
            // Properties
            public $name;
            public $color;

            // Methods
            function set_name($name) {
                $this->name = $name;
            }
            function get_name() {
                return $this->name;
            }
            function set_color($color) {
                $this->color = $color;
            }
            function get_color() {
                return $this->color;
            }
        }

        $apple = new Fruit();
        $apple->set_name('Apple');
        $apple->set_color('Red');
        echo "Name: " . $apple->get_name();
        echo "<br>";
        echo "Color: " . $apple->get_color();
    ?>
</body>
</html>
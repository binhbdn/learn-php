<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Constructor - The __construct Function</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - The __construct Function</h1>
    <?php
        class Fruit {
            // Properties
            public $name;
            public $color;

            // Methods
            function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
            }
            function get_name() {
                return $this->name;
            }
            function get_color() {
                return $this->color;
            }
        }

        $apple = new Fruit("Apple", "red");
        echo $apple->get_name();
        echo "<br>";
        echo $apple->get_color();
    ?>
</body>
</html>
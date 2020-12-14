<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Classes and Objects - Define a Class</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Define a Class</h1>
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
        }
    ?>
</body>
</html>
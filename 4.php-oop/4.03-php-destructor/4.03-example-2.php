<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Destructor - The __destruct Function</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - The __destruct Function</h1>
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
            function __destruct() {
                echo "The fruit is {$this->name} and the color is {$this->color}.";
            }
        }

        $apple = new Fruit("Apple", "red");
    ?>
</body>
</html>
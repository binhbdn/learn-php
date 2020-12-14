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
            // function set_name($name) {
            //     $this->name = $name;
            // }
            function __construct($name) {
                $this->name = $name;
              }
            function get_name() {
                return $this->name;
            }
        }

        // $apple = new Fruit();
        // $apple->set_name('Apple');
        $apple = new Fruit("Apple");
        echo $apple->get_name();
    ?>
</body>
</html>
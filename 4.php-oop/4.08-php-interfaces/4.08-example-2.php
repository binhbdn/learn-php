<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Interfaces</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Interfaces</h1>
    <h2 class="red">Ví dụ 2</h2>
    <?php
        // Interface definition
        interface Animal {
            public function makeSound();
        }

        // Class definitions
        class Cat implements Animal {
            public function makeSound() {
                echo "Meow";
            }
        }

        class Dog implements Animal {
            public function makeSound() {
                echo " Bark ";
            }
        }
          
          class Mouse implements Animal {
            public function makeSound() {
                echo " Squeak ";
            }
        }
          
        // Create a list of animals
        $cat = new Cat();
        $dog = new Dog();
        $mouse = new Mouse();
        $animals = array($cat, $dog, $mouse);
          
        // Tell the animals to make a sound
        foreach($animals as $animal) {
            $animal->makeSound();
        }
    ?>
</body>
</html>
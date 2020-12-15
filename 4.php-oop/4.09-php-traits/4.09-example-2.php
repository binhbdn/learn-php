<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Traits</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Traits</h1>
    <h2 class="red">PHP OOP - Using Multiple Traits</h2>
    <?php
        trait message1 {
            public function msg1() {
                echo "OOP is fun! ";
            }
        }

        trait message2 {
            public function msg2() {
                echo "OOP reduces code duplication!";
            }
        }

        class Welcome {
            use message1;
        }

        class Welcome2 {
            use message1, message2;
        }

        $obj = new Welcome();
        $obj->msg1();
        echo "<br>";

        $obj2 = new Welcome2();
        $obj2->msg1();
        $obj2->msg2();
    ?>
</body>
</html>
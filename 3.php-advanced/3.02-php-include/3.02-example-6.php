<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Require Files</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Require Files</h1>

    <div class="menu">
        <?php include 'menu.php';?>
    </div>

    <h2 class="red">Welcome to my home page!</h2>
    <p>
        <?php require 'noFileExists.php';
            echo "I have a $color $car.";
        ?>
    </p>
    <p>Some more text.</p>
    <?php include 'footer.php';?>
</body>
</html>
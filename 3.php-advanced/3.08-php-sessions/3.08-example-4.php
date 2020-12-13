<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions - Modify a PHP Session Variable</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Sessions - Modify a PHP Session Variable / Sửa đổi một biến phiên PHP</h1>
    <p class="red">Để thay đổi một biến phiên, chỉ cần ghi đè nó:</p>

    <?php
    // to change a session variable, just overwrite it
    $_SESSION["favcolor"] = "yellow";
    print_r($_SESSION);
    ?>
</body>
</html>
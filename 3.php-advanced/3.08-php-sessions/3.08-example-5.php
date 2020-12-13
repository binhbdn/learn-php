<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions - Destroy a PHP Session</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Sessions - Destroy a PHP Session / Hủy một phiên PHP</h1>
    <p>Để xóa tất cả các biến phiên toàn cầu và hủy phiên, hãy sử dụng hàm <span class="red">session_unset()</span> và hàm <span class="red">session_destroy()</span>:</p>
    <span class="red"></span>

    <?php
    // remove all session variables
    session_unset();
    // destroy the session
    session_destroy();
    print_r($_SESSION);
    ?>
</body>
</html>
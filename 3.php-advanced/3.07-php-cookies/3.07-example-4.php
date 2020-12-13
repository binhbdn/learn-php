<!DOCTYPE html>
<?php
    setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check if Cookies are Enabled</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Check if Cookies are Enabled - Kiểm tra xem Cookie đã được Bật chưa</h1>
    <?php
        if(count($_COOKIE) > 0) {
            echo "Cookies are enabled.";
        } else {
            echo "Cookies are disabled.";
        }
    ?>
</body>
</html>
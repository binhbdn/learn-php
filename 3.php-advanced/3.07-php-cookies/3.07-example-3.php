<!DOCTYPE html>
<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete a Cookie</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Delete a Cookie - Xóa cookie</h1>
    <p>Để xóa cookie, hãy sử dụng hàm <span class="red">setcookie()</span> với ngày hết hạn trong quá khứ.</p>
    <?php
    echo "Cookie 'user' is deleted.";
    ?>
</body>
</html>
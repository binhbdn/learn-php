<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions - Start a PHP Session</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Sessions - Start a PHP Session</h1>
    <p><span class="red">Sessions</span> là một cách để lưu trữ thông tin (trong các biến) được sử dụng trên nhiều trang.</p>
    <p>Không giống như <span class="red">cookie</span>, thông tin không được lưu trữ trên máy tính của người dùng.</p>
    <p>Theo mặc định, các <span class="red">session variables</span> (biến phiên) kéo dài cho đến khi người dùng đóng trình duyệt.</p>
    <h2 class="red">Start a PHP Session</h2>
    <p>Một phiên được bắt đầu với hàm <span class="red">session_start()</span>.</p>
    <p>Các <span class="red">session variables</span> (biến phiên) được đặt bằng biến toàn cục PHP: <span class="red">$_SESSION</span>.</p>

    <?php
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
    ?>

    <h2>Lưu ý: Hàm <span class="red">session_start()</span> phải được đặt ở đầu tiên, trước bất kỳ thẻ HTML nào.</h2>
</body>
</html>
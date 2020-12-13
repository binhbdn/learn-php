<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions - Get PHP Session Variable Values</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Sessions - Get PHP Session Variable Values / Nhận giá trị biến phiên PHP</h1>
    <p>Tiếp theo, từ trang này, chúng ta sẽ truy cập thông tin phiên mà chúng ta đã thiết lập trên trang đầu tiên ("3.08-example-1.php").</p>
    <p>Lưu ý rằng các biến phiên không được chuyển riêng lẻ đến từng trang mới, thay vào đó chúng được truy xuất từ ​​phiên chúng ta mở ở đầu mỗi trang (<span class="red">session_start()</span>).</p>
    <p>Cũng lưu ý rằng tất cả các giá trị biến phiên được lưu trữ trong biến <span class="red">$_SESSION</span> chung</p>

    <?php
    // Echo session variables that were set on previous page
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Superglobal - $GLOBALS</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Superglobal - <span class="red">$GLOBALS</span></h1>
    <p><span class="red">$GLOBALS</span> là một biến siêu toàn cục của PHP được sử dụng để truy cập các biến toàn cục từ bất kỳ đâu trong tập lệnh PHP (cũng từ bên trong các hàm hoặc phương thức).</p>
    <p>PHP lưu trữ tất cả các biến toàn cục trong một mảng được gọi là <span class="red">$GLOBALS[index]</span>. <span class="red">index</span> giữ tên của biến.</p>
    <p>Ví dụ dưới đây cho thấy cách sử dụng biến siêu toàn cục <span class="red">$GLOBALS</span>:</p>
    <?php
    $x = 75;
    $y = 25;
    
    function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    
    addition();
    echo $z;
    ?>
</body>
</html>
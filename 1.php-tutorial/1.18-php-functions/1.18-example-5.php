<?php declare(strict_types=1); // strict requirement?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Default Argument Value</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Giá trị đối số mặc định trong PHP</h1>
    <p>Ví dụ sau đây cho thấy cách sử dụng một đối số mặc định. Nếu chúng ta gọi hàm <span class="red">setHeight();</span>. mà không có đối số, nó sẽ lấy giá trị mặc định làm đối số:</p>
    <?php
    function setHeight(int $minheight = 50) {
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight(); // will use the default value of 50
    setHeight(135);
    setHeight(80);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP readfile() Function</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP readfile() Function</h1>
    <p class="red">Hàm readfile() trả về số byte được đọc khi thành công</p>
    <?php
        echo readfile("webdictionary.txt");
    ?>
</body>
</html>
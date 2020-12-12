<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Read Single Line - fgets()</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Read Single Line - fgets() / PHP Đọc một dòng - fgets ()</h1>
    <p>Hàm fgets() được sử dụng để đọc một dòng duy nhất từ một tập tin.</p>
    <p>Lưu ý: Sau khi gọi hàm fgets(), con trỏ tệp đã di chuyển đến dòng tiếp theo.</p>
    <?php
        $myfile = fopen("../3.03-php-file-handling/webdictionary.txt", "r") or die("Unable to open file!");
        echo fgets($myfile);
        echo "<br>";
        echo fgets($myfile);
        fclose($myfile);
    ?>
</body>
</html>
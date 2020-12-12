<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Read Single Character - fgetc()</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Read Single Character - fgetc() / PHP Đọc ký tự đơn - fgetc()</h1>
    <p>Lưu ý: Sau khi gọi hàm fgetc(), con trỏ tệp sẽ di chuyển đến ký tự tiếp theo.</p>
    <?php
        $myfile = fopen("../3.03-php-file-handling/webdictionary.txt", "r") or die("Unable to open file!");
        // Output one line until end-of-file
        while(!feof($myfile)) {
            echo fgetc($myfile);
        }
        fclose($myfile);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Write to File - Overwriting</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Write to File - Overwriting</h1>
    <p>Hàm <span class="red">fwrite()</span> được sử dụng để ghi dữ liệu vào một tập tin.</p>
    <p>Tham số đầu tiên của <span class="red">fwrite()</span> chứa tên tệp cần ghi và tham số thứ hai là chuỗi được ghi.</p>
    <p>Ví dụ dưới đây viết một vài tên vào một tệp mới có tên "newfile.txt":</p>
    <p>Lưu ý rằng chúng tôi đã ghi vào tệp "newfile.txt" hai lần. Mỗi lần ghi vào tệp, chúng tôi gửi chuỗi $txt đầu tiên chứa "John Doe" và chuỗi thứ hai chứa "Jane Doe". Sau khi viết xong, chúng ta đóng tệp bằng hàm fclose().</p>
    <?php
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "Mickey Mouse\n";
        fwrite($myfile, $txt);
        $txt = "Minnie Mouse\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    ?>
</body>
</html>
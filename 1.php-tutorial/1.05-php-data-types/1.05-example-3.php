<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Integer</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP Integer / Số nguyên PHP</h1>
    <p>Kiểu dữ liệu số nguyên là một số không thập phân từ -2,147,483,648 đến 2,147,483,647.</p>
    <p>Quy tắc cho số nguyên:</p>
    <ul>
        <li>Một số nguyên phải có ít nhất một chữ số</li>
        <li>Một số nguyên không được có dấu thập phân</li>
        <li>Một số nguyên có thể là số dương hoặc số âm</li>
        <li>Số nguyên có thể được chỉ định trong ký hiệu: thập phân (cơ số 10), thập lục phân (cơ số 16), bát phân (cơ số 8) hoặc ký hiệu nhị phân (cơ số 2)</li>
    </ul>
    <p>Trong ví dụ sau, <span class="red">$x</span> là một số nguyên. Hàm <span class="red">var_dump()</span> trong PHP trả về kiểu dữ liệu và giá trị:</p>
    <p>Thí dụ</p>
    <?php
        $x = 1981;
        var_dump($x);
    ?>
</body>

</html>
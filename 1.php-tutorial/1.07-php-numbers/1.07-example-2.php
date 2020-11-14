<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Integers</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP Integers / Số nguyên PHP</h1>
    <p>Một số nguyên là một số không có bất kỳ phần thập phân nào.</p>
    <p>2, 256, -256, 10358, -179567 đều là số nguyên. Trong khi 7.56, 10.0, 150.67 là số thập phân.</p>
    <p>Kiểu dữ liệu số nguyên là một số không thập phân từ -2147483648 đến 2147483647. Giá trị lớn hơn (hoặc thấp hơn) giá trị này sẽ được lưu trữ dưới dạng số thực vì nó vượt quá giới hạn của một số nguyên.</p>
    <p>Một điều quan trọng khác cần biết là ngay cả khi 4 * 2.5 là 10, kết quả được lưu trữ dưới dạng float, vì một trong các toán hạng là float (2.5).</p>
    <p>Dưới đây là một số quy tắc cho số nguyên:</p>
    <ul>
        <li>Một số nguyên phải có ít nhất một chữ số</li>
        <li>Một số nguyên không được có dấu thập phân</li>
        <li>Một số nguyên có thể là số dương hoặc số âm</li>
        <li>Số nguyên có thể được chỉ định ở ba định dạng: thập phân (cơ số 10), thập lục phân (cơ số 16 - tiền tố là 0x) hoặc bát phân (cơ số 8 - tiền tố là 0)</li>
    </ul>
    <p>PHP có các functions sau để kiểm tra xem kiểu của một biến có phải là số nguyên hay không:</p>
    <ul>
        <li><span class="red">is_int()</span></li>
        <li><span class="red">is_integer()</span> alias of / bí danh của is_int()</li>
        <li><span class="red">is_long()</span> alias of / bí danh của is_int()</li>
    </ul>
    <p>Thí dụ Kiểm tra xem kiểu của biến có phải là số nguyên hay không:</p>
    <?php
        $x = 1981;
        var_dump(is_int($x));
        echo "<br>";
        $x = 1981.;
        var_dump(is_int($x));
    ?>
</body>

</html>
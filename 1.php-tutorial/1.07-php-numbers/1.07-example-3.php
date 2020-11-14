<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Floats</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP Floats / Số thực PHP</h1>
    <p>Số thực là một số có dấu thập phân hoặc một số ở dạng số mũ.</p>
    <p>2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 đều là số thực.</p>
    <p>Kiểu dữ liệu float thường có thể lưu trữ giá trị lên đến 1.7976931348623E + 308 (phụ thuộc vào nền tảng) và có độ chính xác tối đa là 14 chữ số.</p>
    <p>PHP có các functions sau để kiểm tra xem kiểu của một biến có phải là số thực hay không:</p>
    <ul>
        <li><span class="red">is_float()</span></li>
        <li><span class="red">is_double()</span> alias of / bí danh của is_float()</li>
    </ul>
    <p>Thí dụ Kiểm tra xem kiểu của biến có phải là số thực hay không:</p>
    <?php
        $x = 1981.;
        var_dump(is_float($x));
    ?>
</body>

</html>
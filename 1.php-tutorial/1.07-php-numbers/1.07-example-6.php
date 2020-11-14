<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Numerical Strings</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP Numerical Strings / Chuỗi (chứa) số trong PHP</h1>
    <p>Hàm <span class="red">is_numeric()</span> trong PHP có thể được sử dụng để tìm xem một biến có phải là số hay không.</p>
    <p>Hàm trả về true nếu biến là số hoặc chuỗi số, ngược lại là false.</p>
    <p>Thí dụ Kiểm tra xem biến có phải là số không:</p>
    <?php
        $x = 5985;
        echo "\$x = 5985;";
        echo "<br>var_dump(is_numeric(\$x));<br>";
        var_dump(is_numeric($x));

        $x = "5985";
        echo "<br>\$x = \"5985\";";
        echo "<br>var_dump(is_numeric(\$x));<br>";
        var_dump(is_numeric($x));

        $x = "59.85" + 100;
        echo "<br>\$x = \"59.85\" + 100;";
        echo "<br>var_dump(is_numeric(\$x));<br>";
        var_dump(is_numeric($x));

        $x = "Hello";
        echo "<br>\$x = \"Hello\";";
        echo "<br>var_dump(is_numeric(\$x));<br>";
        var_dump(is_numeric($x));
    ?>
    <p>Lưu ý: Từ PHP 7.0: Hàm is_numeric () sẽ trả về FALSE cho các chuỗi số ở dạng thập lục phân (ví dụ: 0xf4c3b00c), vì chúng không còn được coi là chuỗi số.</p>
</body>

</html>
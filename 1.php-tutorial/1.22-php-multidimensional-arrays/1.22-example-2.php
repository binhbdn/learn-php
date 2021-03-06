<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Multidimensional Arrays</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Multidimensional Arrays - Mảng đa chiều PHP</h1>
    <p>Mảng nhiều chiều là mảng chứa một hoặc nhiều mảng.</p>
    <p>PHP hỗ trợ các mảng đa chiều có độ sâu từ hai, ba, bốn, năm hoặc nhiều hơn. Tuy nhiên, hầu hết mọi người khó quản lý các mảng sâu hơn ba cấp độ.</p>
    <p>A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).</p>
    <p>Mảng hai chiều là một mảng của các mảng (mảng ba chiều là một mảng của các mảng của các mảng).</p>
    <h2>Thí dụ 2</h2>
    <p>Chúng ta cũng có thể đặt một vòng lặp <span class="red">for</span> bên trong một vòng lặp <span class="red">for</span> khác để lấy các phần tử của mảng <span class="red">$cars</span> (chúng ta vẫn phải trỏ đến hai chỉ số):</p>
    <?php
    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }
    ?>


</body>
</html>
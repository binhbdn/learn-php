<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date - Create a Date From a String With strtotime()</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Tạo ngày từ chuỗi với strtotime()</h1>
    <p>Hàm PHP strtotime() được sử dụng để chuyển đổi chuỗi ngày có thể đọc được của con người thành dấu thời gian Unix (số giây kể từ ngày 1 tháng 1 năm 1970 00:00:00 GMT).</p>
    <h2>Cú pháp</h2>
    <p class="red">strtotime(time, now)</p>
    <p>Ví dụ dưới đây tạo ngày và giờ từ hàm strtotime():</p>
    <?php
        $d=strtotime("10:30pm April 15 2014");
        echo "Created date is " . date("d-m-Y h:i:sa", $d);
    ?>
    <p class="red">PHP khá thông minh trong việc chuyển đổi một chuỗi thành một ngày, vì vậy bạn có thể đặt vào các giá trị khác nhau:</p>
    <?php
        $d=strtotime("tomorrow");
        echo "tomorrow<br>";
        echo date("d-m-Y h:i:sa", $d) . "<br>";

        $d=strtotime("next Saturday");
        echo "next Saturday<br>";
        echo date("d-m-Y h:i:sa", $d) . "<br>";

        $d=strtotime("+3 Months");
        echo "+3 Months<br>";
        echo date("d-m-Y h:i:sa", $d) . "<br>";
    ?>
    <p class="red">Tuy nhiên, strtotime() không phải là hoàn hảo, vì vậy hãy nhớ kiểm tra các chuỗi bạn đặt vào đó.</p>
</body>
</html>
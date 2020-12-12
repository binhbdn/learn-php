<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date - Create a Date With mktime()</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Date - Create a Date With mktime()</h1>
    <p>Tham số dấu thời gian tùy chọn trong hàm date() chỉ định một dấu thời gian. Nếu bỏ qua, ngày và giờ hiện tại sẽ được sử dụng (như trong các ví dụ trước đây).</p>
    <p>Hàm PHP mktime()trả về dấu thời gian Unix cho một ngày. Dấu thời gian Unix chứa số giây giữa Kỷ nguyên Unix (ngày 1 tháng 1 năm 1970 00:00:00 GMT) và thời gian được chỉ định.</p>
    <h2>Cú pháp</h2>
    <p class="red">mktime(hour, minute, second, month, day, year)</p>
    <p>Ví dụ dưới đây tạo ngày và giờ với hàm date() từ một số tham số trong hàm mktime():</p>
    <?php
        $d=mktime(11, 14, 54, 8, 12, 2014);
        echo "Created date is " . date("d-m-Y h:i:sa", $d);
    ?>
</body>
</html>
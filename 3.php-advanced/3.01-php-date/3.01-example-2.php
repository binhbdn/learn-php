<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date - Get a Time</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Date - Get a Time</h1>
    <ul>
        <li>H - định dạng 24 giờ của một giờ (00 đến 23)</li>
        <li>h - Định dạng 12 giờ của một giờ với các số 0 ở đầu (01 đến 12)</li>
        <li>i - Các phút có số 0 ở đầu (00 đến 59)</li>
        <li>s - Giây có số 0 ở đầu (00 đến 59)</li>
        <li>a - Viết thường Ante meridiem và Post meridiem (sáng hoặc chiều)</li>
    </ul>
    <p class="red">Lưu ý rằng hàm date() trong PHP sẽ trả về ngày / giờ hiện tại của máy chủ!</p>
    <?php
        echo "The time is " . date("h:i:sa");
    ?>
</body>
</html>
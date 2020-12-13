<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - json_decode()</title>
</head>
<body>
    <h1>PHP - json_decode()</h1>
    <p>Hàm json_decode() được sử dụng để giải mã một đối tượng JSON thành một đối tượng PHP hoặc một mảng kết hợp.</p>
    <p>Ví dụ sau cho thấy cách giải mã dữ liệu JSON thành một mảng kết hợp:</p>
    <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        var_dump(json_decode($jsonobj, true));
    ?>
    <p>Hàm json_decode() trả về một đối tượng theo mặc định.</p>
    <p>Hàm json_decode() có tham số thứ hai và khi được đặt thành true, đối tượng JSON được giải mã thành các mảng kết hợp.</p>
</body>
</html>
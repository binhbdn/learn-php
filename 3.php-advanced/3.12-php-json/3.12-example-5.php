<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Accessing the Decoded Values</title>
</head>
<body>
    <h1>PHP - Accessing the Decoded Values</h1>
    <p>Hàm json_decode() được sử dụng để giải mã một đối tượng JSON thành một đối tượng PHP hoặc một mảng kết hợp.</p>
    <p>Ví dụ sau cho thấy cách truy cập các giá trị từ một đối tượng PHP:</p>
    <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

        $obj = json_decode($jsonobj);

        echo $obj->Peter;
        echo "<br>";
        echo $obj->Ben;
        echo "<br>";
        echo $obj->Joe;
    ?>
</body>
</html>
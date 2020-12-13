<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - json_encode()</title>
</head>
<body>
    <h1>PHP - json_encode()</h1>
    <p>Hàm json_encode() được sử dụng để mã hóa một giá trị sang định dạng JSON.</p>
    <p>Ví dụ sau cho thấy cách mã hóa một mảng kết hợp thành một đối tượng JSON:</p>
    <?php
        $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
        echo json_encode($age);
    ?>
</body>
</html>
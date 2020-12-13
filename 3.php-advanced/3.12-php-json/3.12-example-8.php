<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Looping Through the Values</title>
</head>
<body>
    <h1>PHP - Looping Through the Values</h1>
    <p>Ví dụ sau cho thấy cách lặp qua các giá trị của một mảng kết hợp PHP:</p>
    <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

        $arr = json_decode($jsonobj, true);
        
        foreach($arr as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }
    ?>
</body>
</html>
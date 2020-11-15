<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Indexed Arrays</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Indexed Arrays - Mảng được lập chỉ mục PHP</h1>
    <p>Có hai cách để tạo mảng được lập chỉ mục:</p>
    <p>Chỉ mục có thể được chỉ định tự động (chỉ mục luôn bắt đầu từ 0), như sau:</p>
    <p class="red">$cars = array("Volvo", "BMW", "Toyota");</p>
    <p>hoặc chỉ mục có thể được chỉ định theo cách thủ công:</p>
    <p class="red">$cars[0] = "Volvo";</p>
    <p class="red">$cars[1] = "BMW";</p>
    <p class="red">$cars[2] = "Toyota";</p>
    <p>Ví dụ sau đây tạo một mảng được lập chỉ mục có tên $cars, gán ba phần tử cho nó, sau đó in văn bản chứa các giá trị mảng:</p>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
</body>
</html>
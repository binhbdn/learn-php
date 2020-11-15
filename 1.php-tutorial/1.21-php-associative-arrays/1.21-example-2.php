<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Through an Associative Array</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Loop Through an Associative Array - Lặp qua một mảng liên kết PHP</h1>
    <p>Để lặp qua và in tất cả các giá trị của một mảng liên kết, bạn có thể sử dụng một vòng lặp <span class="red">foreach</span>, như sau:</p>
    <?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?>
</body>
</html>
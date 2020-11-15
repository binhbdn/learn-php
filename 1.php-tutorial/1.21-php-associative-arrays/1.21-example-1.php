<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Associative Arrays</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Associative Arrays - Mảng liên kết PHP</h1>
    <p>Mảng liên kết là mảng sử dụng các khóa được đặt tên mà bạn gán cho chúng.</p>
    <p>Có hai cách để tạo mảng liên kết:</p>
    <p class="red">$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");</p>
    <p>hoặc là:</p>
    <p class="red">$age['Peter'] = "35";</p>
    <p class="red">$age['Ben'] = "37";</p>
    <p class="red">$age['Joe'] = "43";</p>
    <p>Các khóa được đặt tên sau đó có thể được sử dụng trong một tập lệnh:</p>
    <p>Ví dụ:</p>
    <?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old.";
    ?>
</body>
</html>
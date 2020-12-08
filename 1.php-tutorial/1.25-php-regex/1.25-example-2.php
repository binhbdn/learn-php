<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Regular Expressions - Functions</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Regular Expressions - Functions</h1>
    <p>PHP cung cấp nhiều hàm cho phép bạn sử dụng các biểu thức chính quy.</p>
    <p>3 hàm được sử dụng phổ biến nhất:</p>
    <ul>
        <li><span class="red">preg_match()</span> Trả về 1 nếu mẫu được tìm thấy trong chuỗi và 0 nếu không tìm thấy.</li>
        <li><span class="red">preg_match_all()</span> Trả về số lần mẫu được tìm thấy trong chuỗi, cũng có thể là 0</li>
        <li><span class="red">preg_replace()</span> Trả về một chuỗi mới trong đó các mẫu phù hợp đã được thay thế bằng một chuỗi khác</li>
    </ul>
    <p>Ví dụ sử dụng <span class="red">preg_match()</span></p>
    <p>
        <?php
            $str = "Visit W3Schools";
            $pattern = "/w3schools/i";
            echo preg_match($pattern, $str); // Outputs 1
        ?>
    </p>
    <p>Ví dụ sử dụng <span class="red">preg_match_all()</span></p>
    <p>
        <?php
            $str = "The rain in SPAIN falls mainly on the plains.";
            $pattern = "/ain/i";
            echo preg_match_all($pattern, $str); // Outputs 4
        ?>
    </p>
    <p>Ví dụ sử dụng <span class="red">preg_replace()</span></p>
    <p>
        <?php
            $str = "Visit Microsoft!";
            $pattern = "/microsoft/i";
            echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"
        ?>
    </p>
</body>
</html>
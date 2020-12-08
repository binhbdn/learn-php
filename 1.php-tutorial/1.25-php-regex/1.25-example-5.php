<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Regular Expressions - Metacharacters</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Regular Expressions - Metacharacters</h1>
    <p><span class="red">Metacharacters</span>(các siêu ký tự) là những ký tự có ý nghĩa đặc biệt:</p>
    <ul>
        <li><span class="red">|</span> Tìm một kết quả phù hợp cho bất kỳ một trong các mẫu cách nhau bởi | như trong: cat|dog|fish</li>
        <li><span class="red">.</span> Chỉ tìm một trường hợp của bất kỳ ký tự</li>
        <li><span class="red">^</span> Tìm một kết quả phù hợp ở đầu một chuỗi như trong: ^hello</li>
        <li><span class="red">$</span> Tìm một kết quả phù hợp ở cuối chuỗi như trong: world$</li>
        <li><span class="red">\d</span> Tìm một chữ số</li>
        <li><span class="red">\s</span> Tìm một ký tự khoảng trắng</li>
        <li><span class="red">\b</span> Tìm một kết quả phù hợp ở đầu một từ như sau: \bWORD hoặc ở cuối một từ như sau: WORD \ b</li>
        <li><span class="red">\uxxxx</span> Tìm ký tự Unicode được chỉ định bởi số thập lục phân xxxx</li>
    </ul>
    <p>Ví dụ sử dụng <span class="red">cat|dog|fish</span></p>
    <p>
        <?php
            $pattern = "/cat|dog|fish/i";
            
            $str = "CAt go go";
            echo preg_match($pattern, $str); // Outputs 1
            echo "<br>";
            $str = "CA doG go";
            echo preg_match($pattern, $str); // Outputs 1
        ?>
    </p>
    <p>Ví dụ sử dụng <span class="red">.</span></p>
    <p>
        <?php
            $pattern = "/./";
            $str = "";
            echo preg_match($pattern, $str); // Outputs 0
            echo "<br>";
            $str = "t";
            echo preg_match($pattern, $str); // Outputs 1
        ?>
    </p>
    <p>Ví dụ sử dụng <span class="red">^hello</span></p>
    <p>
        <?php
            $pattern = "/^hello/";
            $str = "helo hellooooo oooo";
            echo preg_match($pattern, $str); // Outputs 0
            echo "<br>";
            $str = "hellooooo oooo";
            echo preg_match($pattern, $str); // Outputs 1
        ?>
    </p>
    <p>Ví dụ sử dụng <span class="red">loo\b</span></p>
    <p>
        <?php
            $pattern = "/loo\b/";
            $str = "helo hell oooo";
            echo preg_match($pattern, $str); // Outputs 0
            echo "<br>";
            $str = "hellooooo ooloo";
            echo preg_match($pattern, $str); // Outputs 1
        ?>
    </p>
</body>
</html>
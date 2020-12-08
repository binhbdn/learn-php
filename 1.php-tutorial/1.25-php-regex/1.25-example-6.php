<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Regular Expressions - Quantifiers</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Regular Expressions - Quantifiers</h1>
    <p><span class="red">Quantifiers</span>xác định số lượng</p>
    <ul>
        <li><span class="red">n+</span> Khớp với bất kỳ chuỗi nào chứa ít nhất một n</li>
        <li><span class="red">n*</span> Khớp với bất kỳ chuỗi nào không có hoặc có nhiều lần xuất hiện của n</li>
        <li><span class="red">n?</span> Khớp với bất kỳ chuỗi nào có chứa 0 hoặc một lần xuất hiện của n</li>
        <li><span class="red">n{x}</span> Khớp với bất kỳ chuỗi nào có chứa x lần chuỗi n</li>
        <li><span class="red">n{x,y}</span> Khớp với bất kỳ chuỗi nào có chứa từ x đến y lần chuỗi n</li>
        <li><span class="red">n{x,}</span> Khớp với bất kỳ chuỗi nào có chứa ít nhất x lần chuỗi n</li>
    </ul>
    <p class="red">Lưu ý: Nếu biểu thức của bạn cần tìm kiếm một trong các ký tự đặc biệt, bạn có thể sử dụng dấu gạch chéo ngược (\) để thoát chúng. Ví dụ: để tìm kiếm một hoặc nhiều dấu chấm hỏi, bạn có thể sử dụng biểu thức sau: $pattern = '/\?+/';</p>
    <p>Ví dụ sử dụng <span class="red">cat+</span></p>
    <p>
        <?php
            $pattern = "/cat+/";
            
            $str = "t go cat go";
            echo preg_match($pattern, $str); // Outputs 1
            echo "<br>";
            $str = "CA doG go";
            echo preg_match($pattern, $str); // Outputs 0
        ?>
    </p>
    <p>Ví dụ sử dụng <span class="red">he(l)+(o)*</span></p>
    <p>
        <?php
            $pattern = "/he(l)+(o)*/";
            
            $str = "hel abc";
            echo preg_match($pattern, $str); // Outputs 1
            echo "<br>";
            $str = "hellooo abc";
            echo preg_match($pattern, $str); // Outputs 1
            echo "<br>";
            $str = "heooo abc";
            echo preg_match($pattern, $str); // Outputs 0
        ?>
    </p>
    <p>Ví dụ sử dụng <span class="red">he(l)?o</span></p>
    <p>
        <?php
            $pattern = "/he(l)?o/";
            
            $str = "heo abc";
            echo preg_match($pattern, $str); // Outputs 1
            echo "<br>";
            $str = "helo abc";
            echo preg_match($pattern, $str); // Outputs 1
            echo "<br>";
            $str = "hello";
            echo preg_match($pattern, $str); // Outputs 0
        ?>
    </p>
    <p>Ví dụ sử dụng <span class="red">hello{2}</span></p>
    <p>
        <?php
            $pattern = "/hello{2}/";
            
            $str = "hel hello";
            echo preg_match($pattern, $str); // Outputs 0
            echo "<br>";
            $str = "hellooo hello";
            echo preg_match($pattern, $str); // Outputs 1
            echo "<br>";
            $str = "hellooo hello hello";
            echo preg_match($pattern, $str); // Outputs 1
        ?>
    </p>
</body>
</html>
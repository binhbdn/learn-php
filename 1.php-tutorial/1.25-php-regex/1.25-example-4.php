<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Regular Expressions - Patterns</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Regular Expressions - Patterns / Mẫu biểu thức chính quy</h1>
    <p>Dấu ngoặc vuông (<span class="red">[]</span>) được sử dụng để tìm một loạt (một khoảng) các ký tự:.</p>
    <ul>
        <li><span class="red">[abc]</span> Tìm một ký tự từ các tùy chọn được liệt kê</li>
        <li><span class="red">[^abc]</span> Tìm bất kỳ ký tự nào KHÔNG được liệt kê.</li>
        <li><span class="red">[0-9]</span> Tìm một ký tự từ phạm vi 0 đến 9.</li>
    </ul>
    <p>Ví dụ sử dụng <span class="red">[aoe]</span></p>
    <p>
        <?php
            $str = "Visit W3Schools";
            $pattern = "/[aoe]/i";
            echo preg_match($pattern, $str); // Outputs 1
        ?>
    </p>
    <p>Ví dụ sử dụng <span class="red">[^aoe\s]</span></p>
    <p>
        <?php
            $str = "aoe oeoao eoe oe";
            $pattern = "/[^aoe\s]/i";
            echo preg_match($pattern, $str); // Outputs 0
        ?>
    </p>
    <p>Ví dụ sử dụng <span class="red">[3-6]</span></p>
    <p>
        <?php
            $str = "01221078987";
            $pattern = "/[3-6]/i";
            echo preg_match($pattern, $str); // Outputs 0
        ?>
    </p>
</body>
</html>
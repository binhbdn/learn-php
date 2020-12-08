<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Regular Expressions - Modifiers</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Regular Expressions - Modifiers / Công cụ sửa đổi biểu thức chính quy</h1>
    <p>Công cụ sửa đổi có thể thay đổi cách thực hiện tìm kiếm.</p>
    <ul>
        <li><span class="red">i</span> Thực hiện tìm kiếm không phân biệt chữ hoa chữ thường.</li>
        <li><span class="red">m</span> Thực hiện tìm kiếm nhiều dòng (các mẫu tìm kiếm phần đầu hoặc phần cuối của một chuỗi sẽ khớp với phần đầu hoặc phần cuối của mỗi dòng).</li>
        <li><span class="red">u</span> Cho phép đối sánh chính xác các mẫu được mã hóa UTF-8.</li>
        <li><span class="red">s</span> Tham khảo link trích dẫn bên dưới</li>
        <li><span class="red">D</span> Tham khảo link trích dẫn bên dưới</li>
        <li><span class="red">U</span> Tham khảo link trích dẫn bên dưới</li>
    </ul>
    <p>Ví dụ sử dụng <span class="red">Modifier i</span></p>
    <p>
        <?php
            $str = "Visit W3Schools";
            $pattern = "/w3schools/i";
            echo preg_match($pattern, $str); // Outputs 1
        ?>
    </p>
    <p>Ví dụ sử dụng <span class="red">Modifier m</span></p>
    <p>
        <?php
            $str = "w3schools\n12345";
            $pattern = "/^[0-9]+/m";
            echo preg_match($pattern, $str); // Outputs 1
        ?>
    </p>
    <p>Link để học hỏi thêm : <a href="https://github.com/Hamz-a/php-regex-best-practices/blob/master/05%20Pattern%20modifiers.md">php-regex-best-practices</a></p>
    <p>Giải thích về <span class="red">Modifier u</span> có ở link trên. Link truy cập đến đoạn đó : <a href="https://github.com/Hamz-a/php-regex-best-practices/blob/master/05%20Pattern%20modifiers.md#u-modifier-1">Lower case letter u modifier</a></p>
</body>
</html>
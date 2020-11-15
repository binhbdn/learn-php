<?php declare(strict_types=1); // strict requirement?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP is a Loosely Typed Language</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP is a Loosely Typed Language / PHP là một ngôn ngữ ràng buộc kiểu dữ liệu lỏng lẻo</h1>
    <p>Trong các ví dụ trước đây, lưu ý rằng chúng ta không cần phải cho PHP biết kiểu dữ liệu nào của biến.</p>
    <p>PHP tự động liên kết kiểu dữ liệu với biến, tùy thuộc vào giá trị của nó. Vì kiểu dữ liệu không được đặt theo nghĩa chặt chẽ, bạn có thể làm những việc như thêm một chuỗi vào một số nguyên mà không gây ra lỗi.</p>
    <p>Trong PHP 7, khai báo kiểu đã được thêm vào. Điều này cung cấp cho chúng ta một tùy chọn để chỉ định kiểu dữ liệu mong đợi khi khai báo một hàm và bằng cách thêm khai báo strict, nó sẽ tạo ra "Lỗi nghiêm trọng" nếu kiểu dữ liệu không khớp.</p>
    <br>
    <p>Để chỉ định <span class="red">strict</span>, chúng ta cần thiết lập <span class="red">declare(strict_types=1);</span>. Thiết lập này phải nằm trên dòng đầu tiên của tệp PHP.</p>
    <p>Trong thí dụ sau, chúng ta cố gắng gửi cả một số và một chuỗi đến hàm, nhưng ở đây chúng ta đã thêm khai báo <span class="red">strict</span>:</p>
    <?php
    function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    echo addNumbers(5, "5 days");
    // since strict is enabled and "5 days" is not an integer, an error will be thrown
    ?>
</body>
</html>
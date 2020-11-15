<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP is a Loosely Typed Language</title>
</head>
<body>
    <h1>PHP is a Loosely Typed Language / PHP là một ngôn ngữ ràng buộc kiểu dữ liệu lỏng lẻo</h1>
    <p>Trong các ví dụ trước đây, lưu ý rằng chúng ta không cần phải cho PHP biết kiểu dữ liệu nào của biến.</p>
    <p>PHP tự động liên kết kiểu dữ liệu với biến, tùy thuộc vào giá trị của nó. Vì kiểu dữ liệu không được đặt theo nghĩa chặt chẽ, bạn có thể làm những việc như thêm một chuỗi vào một số nguyên mà không gây ra lỗi.</p>
    <p>Trong PHP 7, khai báo kiểu đã được thêm vào. Điều này cung cấp cho chúng ta một tùy chọn để chỉ định kiểu dữ liệu mong đợi khi khai báo một hàm và bằng cách thêm khai báo strict, nó sẽ tạo ra "Lỗi nghiêm trọng" nếu kiểu dữ liệu không khớp.</p>
    <p>Trong thí dụ sau, chúng ta cố gắng gửi cả một số và một chuỗi đến hàm mà không sử dụng strict:</p>
    <?php
    function addNumbers(int $a, int $b) {
        return $a + $b;
    }
    echo addNumbers(5, "5 days");
    // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
    ?>
</body>
</html>
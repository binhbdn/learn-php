<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>
<body>
    <h1>Tạo (Khai báo) các biến PHP</h1>
    <p>Trong PHP, một biến bắt đầu bằng dấu $, theo sau là tên của biến.</p>
    <?php
        $txt = "Hello world!";
        $x = 5;
        $y = 10.5;
    ?>
    <p>Sau khi thực hiện các câu lệnh trên, biến $txt sẽ giữ giá trị Hello world!, biến $x sẽ giữ giá trị 5 và biến $y sẽ giữ giá trị 10.5.</p>
    <p>Lưu ý: Khi bạn gán giá trị văn bản cho một biến, hãy đặt dấu ngoặc kép xung quanh giá trị đó.</p>
    <p>Lưu ý: Không giống như các ngôn ngữ lập trình khác, PHP không có lệnh khai báo một biến. Nó được tạo ngay khi bạn gán giá trị cho nó lần đầu tiên.</p>
    <h1>Quy tắc đặt tên các biến PHP</h1>
    <ul>
        <li>Một biến bắt đầu bằng dấu $, theo sau là tên của biến</li>
        <li>Tên biến phải bắt đầu bằng một chữ cái hoặc ký tự gạch dưới</li>
        <li>Tên biến không được bắt đầu bằng số</li>
        <li>Tên biến chỉ có thể chứa các ký tự chữ-số và dấu gạch dưới (Az, 0-9 và _)</li>
        <li>Tên biến có phân biệt chữ hoa chữ thường ( $agevà $AGElà hai biến khác nhau)</li>
    </ul>
    <h1>Output Variables</h1>
    <p>Câu lệnh PHP echo thường được dùng để xuất dữ liệu ra màn hình.</p>
    <p>Ví dụ sau sẽ chỉ ra cách xuất văn bản và một biến:</p>
    <?php
        $txt = "W3Schools.com";
        echo "I love $txt!";
    ?>
    <p>Ví dụ sau sẽ tạo ra cùng một đầu ra như ví dụ trên:</p>
    <?php
        $txt = "W3Schools.com";
        echo "I love " . $txt . "!";
    ?>
    <p>Ví dụ sau sẽ xuất ra tổng của hai biến:</p>
    <?php
        $x = 5;
        $y = 4;
        echo $x + $y;
    ?>
    <h1>PHP is a Loosely Typed Language</h1>
    <p>Trong ví dụ trên, hãy lưu ý rằng chúng ta không phải cho PHP biết kiểu dữ liệu nào của biến.</p>
    <p>PHP tự động liên kết kiểu dữ liệu với biến, tùy thuộc vào giá trị của nó. Vì kiểu dữ liệu không được đặt theo nghĩa chặt chẽ, bạn có thể làm những việc như thêm một chuỗi vào một số nguyên mà không gây ra lỗi.</p>
    <p>Trong PHP 7, khai báo kiểu đã được thêm vào. Điều này cung cấp một tùy chọn để chỉ định kiểu dữ liệu được mong đợi khi khai báo một hàm và bằng cách kích hoạt yêu cầu nghiêm ngặt, nó sẽ tạo ra "Lỗi nghiêm trọng" trên một kiểu không khớp.</p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filters - Why Use Filters?</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Why Use Filters? / Tại sao sử dụng bộ lọc?</h1>
    <p>Nhiều ứng dụng web nhận đầu vào dữ liệu từ bên ngoài. Đầu vào / dữ liệu bên ngoài có thể là:</p>
    <ul>
        <li>User input from a form / Người dùng nhập từ một biểu mẫu</li>
        <li>Cookies</li>
        <li>Web services data / Dữ liệu dịch vụ web</li>
        <li>Server variables / Biến máy chủ</li>
        <li>Database query results / Kết quả truy vấn cơ sở dữ liệu</li>
    </ul>
    <h2 class="red">Bạn nên luôn xác thực / làm sạch dữ liệu từ bên ngoài!</h2>
    <h3 class="red">Dữ liệu được gửi không hợp lệ có thể dẫn đến các vấn đề bảo mật và phá vỡ trang web của bạn!</h3>
    <h3 class="red">Bằng cách sử dụng bộ lọc PHP, bạn có thể chắc chắn rằng ứng dụng của mình nhận được đầu vào chính xác (đã được xác thực/ làm sạch)!</h3>
    <br><br><br>
    <p>Bộ lọc PHP được sử dụng để xác thực và làm sạch dữ liệu từ bên ngoài nhập vào chương trình.</p>
    <p>Tiện ích mở rộng bộ lọc PHP có nhiều chức năng cần thiết để kiểm tra thông tin đầu vào của người dùng và được thiết kế để giúp xác thực dữ liệu dễ dàng và nhanh chóng hơn.</p>
    <p>Hàm <span class="red">filter_list()</span> được sử dụng để liệt kê danh sách những gì mà các bộ lọc PHP mở rộng cung cấp:</p>
    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
        foreach (filter_list() as $id =>$filter) {
            echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        }
        ?>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filters - The PHP Filter Extension</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Filters</h1>
    <p><span class="red">Validating data</span>/Xác thực dữ liệu = Xác định xem dữ liệu có ở dạng thích hợp hay không.</p>
    <p><span class="red">Sanitizing data</span>/Làm sạch dữ liệu  = Xóa bất kỳ ký tự bất hợp pháp nào khỏi dữ liệu.</p>
    <h1>The PHP Filter Extension / Phần mở rộng Bộ lọc PHP</h1>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>
    <h1>Các hàm PHP</h1>
    <p>Sức mạnh thực sự của PHP đến từ các hàm của nó.</p>
    <p>PHP có hơn 1000 hàm tích hợp và ngoài ra bạn có thể tạo các hàm tùy chỉnh của riêng mình.</p>
    <h2>Các hàm tích hợp trong PHP</h2>
    <p>PHP có hơn 1000 hàm tích hợp có thể được gọi trực tiếp, từ trong tập lệnh, để thực hiện một tác vụ cụ thể.</p>
    <p>Vui lòng xem tài liệu tham khảo PHP của chúng tôi để có cái nhìn tổng quan đầy đủ về <a href="https://www.w3schools.com/php/php_ref_overview.asp">các hàm tích hợp sẵn trong PHP</a>.</p>
    <h2>Các hàm do người dùng xác định trong PHP</h2>
    <p>Bên cạnh các hàm PHP có sẵn, bạn có thể tạo các hàm của riêng mình.</p>
    <ul>
        <li>Hàm là một khối câu lệnh có thể được sử dụng lặp lại trong một chương trình.</li>
        <li>Một hàm sẽ không tự động thực thi khi tải trang.</li>
        <li>Một hàm sẽ được thực thi bởi một lời gọi hàm.</li>
    </ul>
    <h2>Tạo một hàm do người dùng xác định trong PHP</h2>
    <p>Khai báo hàm do người dùng xác định bắt đầu bằng từ function:</p>
    <p>Cú pháp</p>
    <pre>
        function functionName() {
            // code to be executed;
        }
    </pre>
    <p>Lưu ý: Tên hàm phải bắt đầu bằng chữ cái hoặc dấu gạch dưới. Tên hàm KHÔNG phân biệt chữ hoa chữ thường.</p>
    <p>Mẹo: Đặt tên cho hàm phản ánh chức năng của nó!</p>
    <p>Trong ví dụ dưới đây, chúng tôi tạo một hàm có tên "writeMsg ()". Dấu ngoặc nhọn mở ({) cho biết phần đầu của mã hàm và dấu ngoặc nhọn đóng (}) cho biết phần cuối của hàm. Hàm xuất ra "Hello world!". Để gọi hàm, chỉ cần viết tên của nó theo sau bởi dấu ngoặc ():</p>
    <p>Thí dụ</p>
    <?php
    function writeMsg() {
        echo "Hello world!";
    }

    writeMsg(); // call the function
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP Constants</h1>
    <p>Hằng số giống như các biến ngoại trừ một khi chúng được xác định thì chúng không thể thay đổi hoặc không xác định được.</p>
    <h2>Hằng số PHP</h2>
    <p>Hằng số là một định danh (tên) cho một giá trị đơn giản. Không thể thay đổi giá trị trong tập lệnh.</p>
    <p>Tên hằng hợp lệ bắt đầu bằng một chữ cái hoặc dấu gạch dưới (không có dấu $ trước tên hằng).</p>
    <p>Lưu ý: Không giống như các biến, hằng số tự động là toàn cục trên toàn bộ tập lệnh.</p>
    <h2>Tạo một hằng số PHP</h2>
    <p>Để tạo một hằng số, hãy sử dụng hàm <span class="red">define()</span>.</p>
    <h3>Cú pháp</h3>
    <p class="red">define(name, value, case-insensitive)</p>
    <p><Thông số:/p>
    <ul>
        <li>name : Chỉ định tên của hằng số</li>
        <li>value : Chỉ định giá trị của hằng số</li>
        <li>phân biệt chữ hoa chữ thường : Chỉ định xem tên hằng có nên phân biệt chữ hoa chữ thường hay không. Mặc định là sai</li>
    </ul>
    <h3>Thí dụ</h3>
    <p>Tạo một hằng số có phân biệt chữ hoa chữ thường với tên:</p>
    <p>
        <?php
            define("GREETING", "Welcome to W3Schools.com!");
            echo GREETING;
        ?>
    </p>
    <h3>Thí dụ</h3>
    <p>Tạo một hằng số KHÔNG phân biệt chữ hoa chữ thường với tên:</p>
    <p>
        <?php
            define("WELCOME", "Welcome to W3Schools.com!", true);
            echo Welcome;
        ?>
    </p>
    <h2>Mảng hằng số trong PHP</h2>
    <p>Trong PHP7, bạn có thể tạo một Mảng hằng số bằng cách sử dụng hàm <span class="red">define()</span>.</p>
    <h3>Thí dụ</h3>
    <p>Tạo một Mảng hằng số:</p>
    <?php
        define(
            "cars",
            [
                "Alfa Romeo",
                "BMW",
                "Toyota"
            ]
        );
        echo cars[0];
    ?>
    <h2>Hằng số có phạm vi toàn cục</h2>
    <p>Hằng số tự động có phạm vi toàn cục và có thể được sử dụng trên toàn bộ tập lệnh.</p>
    <h3>Thí dụ</h3>
    <p>Ví dụ này sử dụng một hằng số bên trong một hàm, ngay cả khi nó được định nghĩa bên ngoài hàm::</p>
    <?php
        // define("GREETING", "Welcome to W3Schools.com!");

        function myTest() {
            echo GREETING;
        }
        
        myTest();
    ?>
</body>

</html>
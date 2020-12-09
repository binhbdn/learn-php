<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Forms Handling - $_POST</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Forms Handling / Xử lý biểu mẫu PHP</h1>
    <p>Các superglobals trong PHP <span class="red">$_GET</span> và <span class="red">$_POST</span> được sử dụng để thu thập dữ liệu biểu mẫu.</p>
    <h2>PHP - Một biểu mẫu HTML đơn giản</h2>
    <p>Ví dụ dưới đây hiển thị một biểu mẫu HTML đơn giản với hai trường nhập và nút gửi:</p>
    <form action="2.01-example-1-welcome-post.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <p>Khi người dùng điền vào biểu mẫu ở trên và nhấp vào nút gửi, dữ liệu biểu mẫu sẽ được gửi tới một tệp PHP có tên "2.01-example-1-welcome-post.php" để xử lý. Dữ liệu biểu mẫu được gửi bằng phương thức HTTP POST.</p>
    <p>Để hiển thị dữ liệu đã gửi, bạn chỉ cần dùng hàm echo để hiển thị giá trị tất cả các biến. "2.01-example-1-welcome-post.php" trông như thế này:</p>
    <code>
        <pre>
            &lt;html>
                &lt;body>
                    Welcome &lt;?php echo $_POST["name"]; ?>&lt;br>
                    Your email address is: &lt;?php echo $_POST["email"]; ?>
                &lt;/body>
            &lt;/html>
        </pre>
    </code>
    <p>Đầu ra có thể giống như sau:</p>
    <code>
        <pre>
                    Welcome John
                    Your email address is john.doe@example.com
        </pre>
    </code>
    <p>Kết quả tương tự cũng có thể đạt được bằng cách sử dụng phương thức HTTP GET. Xem file 2.01-example-2.php</p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Create File - fopen()</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Create File - fopen()</h1>
    <p>Hàm <span class="red">fopen()</span> cũng được sử dụng để tạo ra một tập tin. Có thể hơi khó hiểu, nhưng trong PHP, một tệp được tạo bằng cách sử dụng cùng một hàm được sử dụng để mở tệp.</p>
    <p>Nếu bạn sử dụng hàm <span class="red">fopen()</span> trên một tệp chưa tồn tại, nó sẽ tạo tệp đó, với điều kiện tệp đó được mở để ghi (w) hoặc để thêm (a).</p>
    <p>Ví dụ này tạo một tệp mới có tên "testfile.txt". Tệp sẽ được tạo trong cùng thư mục chứa mã PHP.</p>
    <h2>PHP File Permissions</h2>
    <p>Nếu bạn gặp lỗi khi cố chạy mã này, hãy kiểm tra xem bạn đã cấp quyền truy cập tệp PHP để ghi thông tin vào ổ cứng chưa.</p>
    <?php
        $myfile = fopen("testfile.txt", "w");
        fclose($myfile);
    ?>
</body>
</html>
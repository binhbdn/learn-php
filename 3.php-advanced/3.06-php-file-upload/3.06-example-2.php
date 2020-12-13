<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create The Upload File PHP Script</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Create The Upload File PHP Script</h1>
    <p>Giải thích tập lệnh trong file upload.php</p>
    <ul>
        <li><span class="red">$target_dir = "uploads /"</span> - chỉ định thư mục nơi tệp sẽ được đặt</li>
        <li><span class="red">$target_file</span> chỉ định đường dẫn của tệp sẽ được tải lên</li>
        <li><span class="red">$uploadOk = 1</span> chưa được sử dụng (sẽ được sử dụng sau)</li>
        <li><span class="red">$imageFileType</span> giữ phần mở rộng tệp của tệp (chữ thường)</li>
        <li>Tiếp theo, hãy kiểm tra xem file ảnh là ảnh thật hay ảnh giả</li>
    </ul>
    <p class="red">Lưu ý: Bạn sẽ cần tạo một thư mục mới có tên "uploads" trong thư mục chứa tệp "upload.php". Các tệp đã tải lên sẽ được lưu ở đó.</p>
</body>
</html>
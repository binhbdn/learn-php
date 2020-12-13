<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create The HTML Form</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Create The HTML Form</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <p>Một số quy tắc cần tuân theo cho biểu mẫu HTML ở trên:</p>
    <ul>
        <li>Đảm bảo rằng biểu mẫu sử dụng method = "post"</li>
        <li>Biểu mẫu cũng cần thuộc tính sau: enctype = "multiart / form-data". Nó chỉ định loại nội dung sẽ sử dụng khi gửi biểu mẫu</li>
    </ul>
    <p class="red">Nếu không có các yêu cầu trên, quá trình tải tệp lên sẽ không hoạt động.</p>
    <p>Những điều khác cần lưu ý:</p>
    <ul>
        <li>Thuộc tính type="file" của thẻ &lt;input> hiển thị trường đầu vào dưới dạng điều khiển chọn tệp, với nút "Choose file" bên cạnh thông báo "No file chosen"</li>
    </ul>
    <p>Biểu mẫu trên sẽ gửi dữ liệu đến một tệp có tên "upload.php", tiếp theo chúng ta sẽ tạo tệp này.</p>
</body>
</html>
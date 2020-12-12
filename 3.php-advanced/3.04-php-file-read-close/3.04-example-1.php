<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP fopen(), fread(), fclose() Function</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Open File - fopen()</h1>
    <p>Phương pháp tốt hơn để mở tệp là dùng hàm <span class="">fopen()</span>. Hàm này cung cấp cho bạn nhiều lựa chọn hơn so với hàm <span class="red">readfile()</span>.</p>
    <p>Tham số đầu tiên của <span class="">fopen()</span> chứa tên của tệp sẽ được mở và tham số thứ hai chỉ định tệp sẽ được mở ở chế độ nào. Ví dụ sau tạo thông báo nếu hàm <span class="">fopen()</span> không thể mở tệp được chỉ định:</p>
    <?php
        $myfile = fopen("../3.03-php-file-handling/webdictionary.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("../3.03-php-file-handling/webdictionary.txt"));
        fclose($myfile);
    ?>
    <table>
        <tbody>
            <tr>
                <th style="width:10%">Modes</th>
                <th style="width:90%">Description</th>
            </tr>
            <tr>
                <td>r</td>
                <td><strong>Mở một tệp để chỉ đọc</strong>. Con trỏ tệp bắt đầu ở đầu tệp</td>
            </tr>
            <tr>
                <td>w</td>
                <td><strong>Mở tệp chỉ để ghi</strong>. Xóa nội dung của tệp hoặc tạo tệp mới nếu nó không tồn tại. Con trỏ tệp bắt đầu ở đầu tệp</td>
            </tr>
            <tr>
                <td>a</td>
                <td><strong>Mở tệp chỉ để ghi</strong>. Dữ liệu hiện có trong tệp được giữ nguyên. Con trỏ tệp bắt đầu ở cuối tệp. Tạo tệp mới nếu tệp không tồn tại</td>
            </tr>
            <tr>
                <td>x</td>
                <td><strong>Tạo một tệp mới chỉ để ghi</strong>. Trả về FALSE và lỗi nếu tệp đã tồn tại</td>
            </tr>
            <tr>
                <td>r+</td>
                <td><strong>Mở tệp để đọc/ghi</strong>. Con trỏ tệp bắt đầu ở đầu tệp</td>
            </tr>
            <tr>
                <td>w+</td>
                <td><strong>Mở tệp để đọc/ghi</strong>. Xóa nội dung của tệp hoặc tạo tệp mới nếu nó không tồn tại. Con trỏ tệp bắt đầu ở đầu tệp</td>
            </tr>
            <tr>
                <td>a+</td>
                <td><strong>Mở tệp để đọc/ghi</strong>. Dữ liệu hiện có trong tệp được giữ nguyên. Con trỏ tệp bắt đầu ở cuối tệp. Tạo tệp mới nếu tệp không tồn tại</td>
            </tr>
            <tr>
                <td>x+</td>
                <td><strong>Mở tệp mới để đọc/ghi</strong>. Trả về FALSE và lỗi nếu tệp đã tồn tại</td>
            </tr>
        </tbody>
    </table>
    <h1>PHP Read File - fread()</h1>
    <p>Tham số đầu tiên của fread() chứa tên của tệp để đọc và tham số thứ hai chỉ định số byte tối đa để đọc.</p>
    <h1>PHP Close File - fclose()</h1>
    <p>Hàm fclose() được sử dụng để đóng một tập tin mở.</p>
    <p>Thực hành lập trình tốt là đóng tất cả các tệp sau khi bạn đã hoàn thành chúng. Bạn không muốn một tệp đang mở chạy xung quanh trên máy chủ của mình chiếm tài nguyên!</p>
    <p>fclose() yêu cầu tên của tệp (hoặc một biến giữ tên tệp) mà chúng ta muốn đóng.</p>
</body>
</html>
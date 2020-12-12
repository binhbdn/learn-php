<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Include Files</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Include Files</h1>
    <p>Câu lệnh <span class="red">include</span> (hoặc <span class="red">require</span>) lấy tất cả text/code/markup (văn bản/mã/ đánh dấu) tồn tại trong tệp được chỉ định và sao chép nó vào tệp sử dụng câu lệnh include.</p>
    <p>Including files rất hữu ích khi bạn muốn bao gồm cùng một tệp PHP, HTML hoặc tệp văn bản trên nhiều trang của một trang web.</p>
    <h2 class="red">Các câu lệnh PHP include, PHP require</h2>
    <p>Có thể chèn nội dung của một tệp PHP này vào một tệp PHP khác (trước khi máy chủ thực thi nó), với câu lệnh PHP include hoặc PHP require.</p>
    <p><strong>Các câu lệnh PHP include hoặc PHP require giống hệt nhau, ngoại trừ khi bị lỗi</strong></p>
    <ul>
        <li><span class="red">require</span> sẽ tạo ra lỗi nghiêm trọng (E_COMPILE_ERROR) và dừng tập lệnh</li>
        <li><span class="red">include</span> sẽ chỉ tạo ra một cảnh báo (E_WARNING) và tập lệnh sẽ tiếp tục</li>
    </ul>
    <p>Vì vậy, nếu bạn muốn quá trình thực thi tiếp tục và hiển thị cho người dùng đầu ra, ngay cả khi tệp bao gồm bị thiếu, hãy sử dụng câu lệnh include.</p>
    <p>Mặt khác, trong trường hợp mã hóa FrameWork, CMS hoặc ứng dụng PHP phức tạp, hãy luôn sử dụng câu lệnh request để đưa tệp khóa vào quy trình thực thi. Điều này sẽ giúp tránh ảnh hưởng đến tính bảo mật và tính toàn vẹn của ứng dụng của bạn, đề phòng trường hợp vô tình thiếu một tệp khóa.</p>
    <h2 class="red">Syntax</h2>
    <p class="red">include 'filename';</p>
    <p class="red">require 'filename';</p>
    <br>
    <p>&copy; 2010-<?php echo date("Y");?></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Forms Handling - GET vs. POST</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">GET và POST</h1>
    <p>Cả GET và POST đều tạo ra một mảng (ví dụ: array(key1 => value1, key2 => value2, key3 => value3, ...)). Mảng này chứa các cặp khóa/giá trị, trong đó các khóa là tên của form control và giá trị là dữ liệu đầu vào từ người dùng.</p>
    <p>GET và POST tương ứng với $_GET và $_POST. Đây là những superglobals, có nghĩa là chúng luôn có thể truy cập được, bất kể phạm vi - và bạn có thể truy cập chúng từ bất kỳ hàm, lớp hoặc tệp nào mà không cần phải làm bất cứ điều gì đặc biệt.</p>
    <p><span class="red">$_GET</span> là một mảng <span class="red">các biến được truyền</span> cho tập lệnh hiện tại <span class="red">thông qua các tham số URL</span> (URL parameters).</p>
    <p><span class="red">$_POST</span> là một mảng <span class="red">các biến được truyền</span> cho tập lệnh hiện tại <span class="red">thông qua phương thức HTTP POST</span>.</p>
    <h1 class="red">Khi nào sử dụng GET?</h1>
    <p>Thông tin được gửi từ biểu mẫu với phương thức GET <span class="red">được hiển thị cho mọi người</span> (tất cả các tên biến và giá trị được hiển thị trong URL). GET cũng có giới hạn về số lượng thông tin cần gửi. <span class="red">Giới hạn là khoảng 2000 ký tự</span>. Tuy nhiên, vì các biến được hiển thị trong URL, nên <span class="red">có thể đánh dấu trang (bookmark)</span>. Điều này có thể hữu ích trong một số trường hợp.</p>
    <p>GET có thể được sử dụng để gửi dữ liệu không nhạy cảm.</p>
    <p>Lưu ý: <span class="red">GET KHÔNG BAO GIỜ được sử dụng để gửi mật khẩu hoặc thông tin nhạy cảm</span> khác!</p>
    <h1 class="red">Khi nào sử dụng POST?</h1>
    <p>Thông tin được gửi từ biểu mẫu có phương thức POST là <span class="red">ẩn đối với những người khác</span> (tất cả các key/value đều được nhúng trong nội dung của yêu cầu HTTP) và <span class="red">không có giới hạn về lượng thông tin cần gửi</span>.</p>
    <p>Hơn nữa POST hỗ trợ chức năng nâng cao như hỗ trợ đầu vào nhị phân từng phần trong khi tải tệp lên máy chủ.</p>
    <p>Tuy nhiên, vì các biến không được hiển thị trong URL, nên không thể đánh dấu trang.</p>
    <h2 class="red">Developers prefer POST for sending form data.</h2>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation - htmlspecialchars()</title>
    <style>.red,.error{color:red;}</style>
</head>
<body>
    <h1>PHP Form Validation / Xác thực biểu mẫu PHP</h1>
    <!-- <form method="post" action="<?php // echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
        Name: <input type="text" name="name" value=""><span class="error">*</span><br><br>
        E-mail: <input type="text" name="email" value=""><span class="error">*</span><br><br>
        Website: <input type="text" name="website" value=""><span class="error"></span><br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">*</span><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <h2 class="red">$_SERVER["PHP_SELF"] là một biến siêu toàn cục trả về tên tệp của tập lệnh hiện đang thực thi.</h2>
    <p>Vì vậy, $_SERVER["PHP_SELF"] sẽ gửi dữ liệu biểu mẫu đã gửi đến chính trang đó, thay vì chuyển sang một trang khác. Bằng cách này, người dùng sẽ nhận được thông báo lỗi trên cùng một trang với biểu mẫu.</p>
    <h2 class="red">Hàm htmlspecialchars() là gì?</h2>
    <p>Hàm htmlspecialchars() chuyển đổi các ký tự đặc biệt thành các thực thể HTML. Điều này có nghĩa là nó sẽ thay thế các ký tự HTML như < và > bằng &amp;lt; và &amp;gt;. Điều này ngăn những kẻ tấn công khai thác mã bằng cách chèn mã HTML hoặc Javascript (Các cuộc tấn công Cross-site Scripting) vào các biểu mẫu.</p>
    <h2 class="red">Lưu ý lớn về bảo mật biểu mẫu PHP</h2>
    <h3 class="red">Biến $_SERVER["PHP_SELF"] có thể bị tin tặc sử dụng!</h3>
    <h3 class="red">Nếu PHP_SELF được sử dụng trong trang của bạn thì người dùng có thể nhập dấu gạch chéo (/) rồi thực thi một số lệnh Cross Site Scripting (XSS).</h3>
    <h3 class="red">Cross-site scripting (XSS) là một loại lỗ hổng bảo mật máy tính thường thấy trong các ứng dụng Web. XSS cho phép kẻ tấn công đưa tập lệnh phía máy khách vào các trang Web được người dùng khác xem.</h3>
    <p>Giả sử chúng ta xóa Hàm htmlspecialchars() trong biểu mẫu trên.</p>
    <p>Bây giờ, nếu nhập vào thanh địa chỉ URL "http://localhost:8000/2.php-forms/2.02-php-form-validation/2.02-example-1.php", thì đoạn mã sẽ được dịch thành:</p>
    <p>&lt; form method="post" action="/2.php-forms/2.02-php-form-validation/2.02-example-1.php"> </p>
    <p>Tuy nhiên, hãy xem xét rằng người dùng nhập URL sau vào thanh địa chỉ:</p>
    <p>http://localhost:8000/2.php-forms/2.02-php-form-validation/2.02-example-1.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E</p>
    <a target="_blank" href="http://localhost:8000/2.php-forms/2.02-php-form-validation/2.02-example-1.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E">Hoặc click vào đây</a>
    <p>Trong trường hợp này, mã sẽ được dịch thành:</p>
    <p class="red">&lt; form method="post" action="/2.php-forms/2.02-php-form-validation/2.02-example-1.php/">&lt;script>alert('hacked')&lt;/script> </p>
    <p class="red">Mã này thêm thẻ script và lệnh cảnh báo. Và khi tải trang, mã JavaScript sẽ được thực thi (người dùng sẽ thấy một hộp cảnh báo). Đây chỉ là một ví dụ đơn giản và vô hại về cách khai thác biến PHP_SELF.</p>
    <p>Hãy lưu ý rằng bất kỳ mã JavaScript nào cũng có thể được thêm vào bên trong thẻ &lt;script>! Một tin tặc có thể chuyển hướng người dùng đến một tệp trên máy chủ khác và tệp đó có thể chứa mã độc hại có thể thay đổi các biến chung hoặc gửi biểu mẫu đến một địa chỉ khác để lưu dữ liệu người dùng, chẳng hạn.</p>
    <h2 class="red">Làm thế nào để tránh bị khai thác $_SERVER["PHP_SELF"]?</h2>
    <p>Có thể tránh khai thác $_SERVER["PHP_SELF"] bằng cách sử dụng hàm htmlspecialchars().</p>
    <p>Bây giờ nếu người dùng cố gắng khai thác biến PHP_SELF, nó sẽ dẫn đến kết quả sau:</p>
    <p class="red">&lt;form method="post" action="/2.php-forms/2.02-php-form-validation/2.02-example-1.php/&amp;quot;&amp;gt;&amp;lt;script&amp;gt;alert('hacked')&amp;lt;/script&amp;gt;"></p>
    <p>Nỗ lực khai thác không thành công và không có tác hại nào được thực hiện!</p>
    <br>
    <br>
</body>
</html>
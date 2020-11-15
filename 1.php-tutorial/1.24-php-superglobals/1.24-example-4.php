<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Superglobal - $_REQUEST</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Superglobal - <span class="red">$_REQUEST</span></h1>
    <p><span class="red">$_REQUEST</span> là một biến siêu toàn cục của PHP được sử dụng để thu thập dữ liệu sau khi gửi biểu mẫu HTML.</p>
    <p>Ví dụ dưới đây cho thấy một biểu mẫu có trường nhập và nút <span class="red">submit</span>. Khi người dùng gửi dữ liệu bằng cách nhấp vào nút <span class="red">submit</span>, dữ liệu biểu mẫu sẽ được gửi đến tệp được chỉ định trong action attribute of the &lt;form> tag. Trong ví dụ này, chúng tôi trỏ đến chính tệp này để xử lý dữ liệu biểu mẫu. Nếu bạn muốn sử dụng tệp PHP khác để xử lý dữ liệu biểu mẫu, hãy thay thế tệp đó bằng tên tệp bạn chọn. Sau đó, chúng ta có thể sử dụng biến siêu toàn cục <span class="red">$_REQUEST</span> để thu thập giá trị của trường đầu vào:</p>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
</body>
</html>
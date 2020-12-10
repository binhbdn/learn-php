<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Data Validation</title>
    <style>.red,.error{color:red;}</style>
</head>
<body>
<?php
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
    <h1>PHP Form Validation / Xác thực biểu mẫu PHP</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Name: <input type="text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Website: <input type="text" name="website">
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
<?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
?>
    <p>Điều đầu tiên chúng ta sẽ làm là chuyển tất cả các biến thông qua hàm htmlspecialchars() của PHP.</p>
    <p>Khi chúng ta sử dụng hàm htmlspecialchars(); sau đó nếu người dùng cố gắng gửi nội dung là mã lệnh JS sau trong trường văn bản:</p>
    <p class="red">&lt;script> location.href ('http://www.hacked.com') &lt;/script></p>
    <p>Lệnh JS này sẽ không được thực thi, vì nó sẽ được lưu dưới dạng mã thoát HTML, như dưới đây:</p>
    <p class="red">&amp;lt;script&amp;gt;location.href('http://www.hacked.com')&amp;lt;/script&amp;gt;</p>
    <p>Do đó, mã (JS) an toàn khi được hiển thị trên một trang hoặc bên trong e-mail.</p>
    <p>Chúng ta cũng sẽ thực hiện hai việc nữa khi người dùng gửi biểu mẫu:</p>
    <ol>
        <li>Loại bỏ các ký tự không cần thiết (thêm khoảng trắng, tab, dòng mới) khỏi dữ liệu đầu vào của người dùng với hàm <span class="red">trim()</span> trong PHP</li>
        <li>Xóa dấu gạch chéo ngược (\) khỏi dữ liệu đầu vào của người dùng với hàm <span class="red">stripslashes()</span> trong PHP</li>
    </ol>
    <p>Bước tiếp theo là tạo một hàm sẽ thực hiện tất cả việc kiểm tra cho chúng ta (điều này thuận tiện hơn nhiều so với việc viết đi viết lại cùng một đoạn mã).</p>
    <p>Chúng ta sẽ đặt tên cho hàm là <span class="red">test_input()</span>.</p>
    <p>Cuối cùng, chúng ta có thể kiểm tra từng biến $_POST bằng hàm test_input()</p>
    <br>
    <br>
</body>
</html>
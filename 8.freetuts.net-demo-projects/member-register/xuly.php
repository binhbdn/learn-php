<?php
// Thiết lập charset utf8
header('Content-Type: text/html; charset=utf-8');

// Vì tên button submit là do-register nên ta sẽ kiểm tra nếu
// tồn tại key này trong biến toàn cục $_POST thì nghĩa là người 
// dùng đã click register(submit)
if (isset($_POST['do-register'])) {
  // Kết nối CSDL
  $conn = mysqli_connect('localhost', 'root', '', 'demo') or die('Lỗi kết nối');
  mysqli_set_charset($conn, "utf8");

  // Lấy thông tin
  // Để an toàn thì ta dùng hàm mysqli_escape_string để chống hack sql injection
  $username   = isset($_POST['username']) ? mysqli_escape_string($conn, $_POST['username']) : '';
  $password   = isset($_POST['password']) ? md5($_POST['password']) : '';
  $email      = isset($_POST['email'])    ? mysqli_escape_string($conn, $_POST['email']) : '';
  $phone      = isset($_POST['phone'])    ? mysqli_escape_string($conn, $_POST['phone']) : '';
  $level      = isset($_POST['level'])    ? (int)$_POST['level'] : '';

  // Validate Thông Tin Username và Email có bị trùng hay không
  // Kiểm tra username hoặc email có bị trùng hay không
  $sql = "SELECT * FROM member WHERE username = '$username' OR email = '$email'";

  // Thực thi câu truy vấn
  $result = mysqli_query($conn, $sql);

  // Nếu kết quả trả về lớn hơn 0 thì nghĩa là username hoặc email đã tồn tại trong CSDL
  if (mysqli_num_rows($result) > 0) {
    // Sử dụng javascript để thông báo
    echo '<script language="javascript">alert("username hoặc email đã tồn tại"); window.location="register.php";</script>';

    // Dừng chương trình
    die();
  } else {
    // Ngược lại thì thêm bình thường
    $sql = "INSERT INTO member (username, password, email, phone, level) VALUES ('$username','$password','$email','$phone', '$level')";

    if (mysqli_query($conn, $sql)) {
      echo '<script language="javascript">alert("Đăng ký thành công"); window.location="register.php";</script>';
    } else {
      echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
    }
  }
}
?>
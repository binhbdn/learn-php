<?php
// Nếu không phải là sự kiện đăng ký thì không xử lý
if (!isset($_POST['txtUsername'])) {
  die('');
}

//Nhúng file kết nối với database
include('ketnoi.php');

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

//Lấy dữ liệu từ file dangky.php
$username   = addslashes($_POST['txtUsername']);
$password   = addslashes($_POST['txtPassword']);
$email      = addslashes($_POST['txtEmail']);
$fullname   = addslashes($_POST['txtFullname']);
$birthday   = addslashes($_POST['txtBirthday']);
$sex        = addslashes($_POST['txtSex']);

//Kiểm tra người dùng đã nhập liệu đầy đủ chưa
if (!$username || !$password || !$email || !$fullname || !$birthday || !$sex) {
  echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
  exit;
}

// Mã khóa mật khẩu
$password = md5($password);

//Kiểm tra tên đăng nhập này đã có người dùng chưa
if (mysqli_num_rows(mysqli_query($conn, "SELECT username FROM members WHERE username='$username'")) > 0) {
  echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
  exit;
}

//Kiểm tra email có đúng định dạng hay không
if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $email)) {
  echo "Email này không hợp lệ. Vui lòng nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
  exit;
}

//Kiểm tra email đã có người dùng chưa
if (mysqli_num_rows(mysqli_query($conn, "SELECT email FROM members WHERE email='$email'")) > 0) {
  echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
  exit;
}
//Kiểm tra dạng nhập vào của ngày sinh
if (!preg_match("#^[0-9]{1,2}/[0-9]{1,2}/[0-9]{4}$#", $birthday)) {
  echo "Ngày tháng năm sinh không hợp lệ. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
  exit;
}

//Lưu thông tin thành viên vào bảng
@$addmember = mysqli_query($conn, "
  INSERT INTO members (
    username,
    password,
    email,
    fullname,
    birthday,
    sex
  )
  VALUE (
    '{$username}',
    '{$password}',
    '{$email}',
    '{$fullname}',
    '{$birthday}',
    '{$sex}'
  )
");

//Thông báo quá trình lưu
if ($addmember)
  echo "Quá trình đăng ký thành công. <a href='trangchu.php'>Về trang chủ</a>";
else
  echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";

<?php require "user.php";
// Biến lưu message
$message = '';

// Kiểm tra login
if (!empty($_POST['login'])) {
  // Lấy thông tin từ form
  $username = isset($_POST['username']) ? $_POST['username']  : false;
  $password = isset($_POST['password']) ? $_POST['password']  : false;

  // Kiểm tra thông tin đăng nhập
  // ở đây tôi lấy thông tin ảo
  if ($username != 'admin' || $password != '123') {
    $message = 'Sai tên đăng nhập hoặc mật khẩu';
  } else // Đăng nhập thành công
  {
    $user->set_logged($username);

    // Lấy path redirect
    $redirect = isset($_GET['redirect']) ? $_GET['redirect'] : 'index.php';

    header('Location:' . $redirect);
    exit();
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
  <div style="width: 200px; margin:0px auto; border:solid 1px gray; padding: 20px">
    <form method="post" action="">
      Username: <input type="text" name="username" value="" /> <br />
      Password: <input type="text" name="password" value="" /> <br />
      <input type="submit" name="login" value="Login" />
      <?php echo $message; ?>
    </form>
  </div>
</body>

</html>
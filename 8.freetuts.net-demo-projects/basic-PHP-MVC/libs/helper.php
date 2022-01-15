<?php
if (!defined('IN_SITE')) die('The request not found');
// Hàm tạo URL
function base_url($uri = '')
{
  return 'http://localhost:8000/8.freetuts.net-demo-projects/basic-PHP-MVC/admin/index.php' . $uri;
}

// Hàm redirect
function redirect($url)
{
  header("Location:{$url}");
  exit();
}

// Hàm lấy value từ $_POST
function input_post($key)
{
  return isset($_POST[$key]) ? trim($_POST[$key]) : false;
}

// Hàm lấy value từ $_GET
function input_get($key)
{
  return isset($_GET[$key]) ? trim($_GET[$key]) : false;
}

// Hàm kiểm tra submit
function is_submit($key)
{
  return (isset($_POST['request_name']) && $_POST['request_name'] == $key);
}

// Hàm show error
function show_error($error, $key)
{
  echo '<span style="color: red">' . (empty($error[$key]) ? "" : $error[$key]) . '</span>';
}

// Hàm kiểm tra là supper admin
function is_supper_admin()
{
  $user = is_logged();
  if (!empty($user['level']) && $user['level'] == '1' && $user['username'] == 'admin') {
    return true;
  }
  false;
}
?>
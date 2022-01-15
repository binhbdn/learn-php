<?php
if (!defined('IN_SITE')) die('The request not found');
// Hàm thiết lập là đã đăng nhập
function set_logged($username, $level)
{
  session_set('ss_user_token', array(
    'username' => $username,
    'level' => $level
  ));
}

// Hàm thiết lập đăng xuất
function set_logout()
{
  session_delete('ss_user_token');
}

// Hàm kiểm tra trạng thái người dùng đã đăng hập chưa
function is_logged()
{
  $user = session_get('ss_user_token');
  return $user;
}

// Hàm kiểm tra có phải là admin hay không
function is_admin()
{
  $user  = is_logged();
  if (!empty($user['level']) && $user['level'] == '1') {
    return true;
  }
  return false;
}

// Lấy username người dùng hiện tại
function get_current_username()
{
  $user  = is_logged();
  return isset($user['username']) ? $user['username'] : '';
}

// Lấy level người dùng hiện tại
function get_current_level()
{
  $user  = is_logged();
  return isset($user['level']) ? $user['level'] : '';
}

// Tạo chuỗi query string
function create_link($uri, $filter = array())
{
  $string = '';
  foreach ($filter as $key => $val) {
    if ($val != '') {
      $string .= "&{$key}={$val}";
    }
  }
  return $uri . ($string ? '?' . ltrim($string, '&') : '');
}

// Hàm phân trang
function paging($link, $total_records, $current_page, $limit)
{
  // Tính tổng số trang
  $total_page = ceil($total_records / $limit);

  // Giới hạn current_page trong khoảng 1 đến total_page
  if ($current_page > $total_page) {
    $current_page = $total_page;
  } else if ($current_page < 1) {
    $current_page = 1;
  }

  // Tìm Start
  $start = ($current_page - 1) * $limit;

  $html = '';

  // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
  if ($current_page > 1 && $total_page > 1) {
    $html .= '<a href="' . str_replace('{page}', $current_page - 1, $link) . '">Prev</a>';
  }

  // Lặp khoảng giữa
  for ($i = 1; $i <= $total_page; $i++) {
    // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a
    if ($i == $current_page) {
      $html .= '<span>' . $i . '</span>';
    } else {
      $html .= '<a href="' . str_replace('{page}', $i, $link) . '">' . $i . '</a>';
    }
  }

  // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
  if ($current_page < $total_page && $total_page > 1) {
    $html .= '<a href="' . str_replace('{page}', $current_page + 1, $link) . '">Next</a>';
  }

  // Trả kết quả
  return array(
    'start' => $start,
    'limit' => $limit,
    'html' => $html
  );
}
?>
<?php
// Bước 1: Lấy các tham số cần lọc
// Lấy thông tin lọc
$filter  = array(
  'email'     => $_GET["email"] ?? false,
  'phone'     => $_GET["phone"] ?? false,
  'address'   => $_GET["address"] ?? false,
  'fullname'  => $_GET["email"] ?? false,
);

// Bước 2: Xử lý điều kiện lọc
// Biến lưu trữ lọc
$where = array();

// Nếu có chọn lọc thì thêm điều kiện vào mảng
if ($filter['email']) {
  $where[] = "email = '{$filter['email']}'";
}

if ($filter['phone']) {
  $where[] = "phone = '{$filter['phone']}'";
}

if ($filter['address']) {
  $where[] = "address = '{$filter['address']}'";
}

if ($filter['fullname']) {
  $where[] = "fullname = '{$filter['fullname']}'";
}

// Bước 3: Câu truy vấn cuối cùng
$sql = 'SELECT * FROM customer';
if ($where) {
  $sql .= ' WHERE ' . implode(' AND ', $where);
}
?>
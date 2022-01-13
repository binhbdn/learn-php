<?php
$data = $_POST;
$errors = [];

//Validate name
if (
  !is_string($data['name']) || strlen($data['name']) < 5
  || strlen($data['name']) > 55
) {
  $errors['name'] = $data['name'] . "Tên cầu thủ không hợp lệ!";
}
//Validate age
if (!is_numeric($data['age']) || $data['age'] < 0 || $data['age'] > 150) {
  $errors['age'] = "Tuổi không hợp lệ!";
}
//Validate national
if (
  !is_string($data['national']) || strlen($data['national']) < 2
  || strlen($data['national']) > 55
) {
  $errors['national'] = "Quốc tịch không hợp lệ!";
}
//Validate position
if (
  !is_string($data['position']) || strlen($data['position']) < 2
  || strlen($data['position']) > 10
) {
  $errors['position'] = "Vị trí không hợp lệ!";
}
//Validate salary
if (!is_numeric($data['salary']) || $data['salary'] < 0 || $data['salary'] > 1000000) {
  $errors['salary'] = "Lương không hợp lệ!";
}
if (count($errors) > 0) {
  $err_str = '<ul>';
  foreach ($errors as $err) {
    $err_str .= '<li>' . $err . '</li>';
  }
  $err_str .= '</ul>';
  echo  $err_str;
} else {
  //Kết nối databse
  $con = mysqli_connect('localhost', 'root', '', 'demo');

  if (isset($_GET['id'])) {
    //Chỉnh sửa thông tin
    //Viết câu SQL lấy tất cả dữ liệu trong bảng players
    $sql = "UPDATE `players` SET `name`='" . $data['name'] . "',`age`='" . $data['age'] . "',`national`='" . $data['national'] . "',`position`='" . $data['position'] . "',`salary`='" . $data['salary'] . "' WHERE `id` = " . $_GET['id'];
    // Chạy câu SQL
    if ($result = mysqli_query($con, $sql)) {
      echo "<h1>Chỉnh sửa thông tin cầu thủ thành công Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
    } else {
      echo "<h1>Có lỗi xảy ra Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
    }
  } else {
    //Thêm mới cầu thủ
    //Viết câu SQL lấy tất cả dữ liệu trong bảng players
    $sql = "INSERT INTO `players` 
      (`name`, `age`, `national`, `position`, `salary`) 
      VALUES ('" . $data['name'] . "', '" . $data['age'] . "',
      '" . $data['national'] . "', '" . $data['position'] . "', '" . $data['salary'] . "');";
    //Chạy câu SQL
    if ($result = mysqli_query($con, $sql)) {
      echo "<h1>Thêm mới cầu thủ thành công Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
    } else {
      echo "<h1>Có lỗi xảy ra Click vào <a href='index.php'>đây</a> để về trang danh sách</h1>";
    }
  }
}

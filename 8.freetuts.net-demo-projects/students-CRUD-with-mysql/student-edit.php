<?php

require './libs/students.php';

// Lấy thông tin hiển thị lên để người dùng sửa
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
if ($id) {
  $data = get_student($id);
}

// Nếu không có dữ liệu tức không tìm thấy sinh viên cần sửa
if (!$data) {
  header("location: student-list.php");
}

// Nếu người dùng submit form
if (!empty($_POST['edit_student'])) {
  // Lay data
  $data['sv_name']        = isset($_POST['name']) ? $_POST['name'] : '';
  $data['sv_sex']         = isset($_POST['sex']) ? $_POST['sex'] : '';
  $data['sv_birthday']    = isset($_POST['birthday']) ? $_POST['birthday'] : '';
  $data['sv_id']          = isset($_POST['id']) ? $_POST['id'] : '';

  // Validate thong tin
  $errors = array();
  if (empty($data['sv_name'])) {
    $errors['sv_name'] = 'Chưa nhập tên sinh vien';
  }

  if (empty($data['sv_sex'])) {
    $errors['sv_sex'] = 'Chưa nhập giới tính sinh vien';
  }

  // Neu ko co loi thi insert
  if (!$errors) {
    edit_student($data['sv_id'], $data['sv_name'], $data['sv_sex'], $data['sv_birthday']);
    // Trở về trang danh sách
    header("location: student-list.php");
  }
}

disconnect_db();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Thêm sinh vien</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1>Thêm sinh vien </h1>
  <a href="student-list.php">Trở về</a> <br /> <br />
  <form method="post" action="student-edit.php?id=<?php echo $data['sv_id']; ?>">
    <table width="50%" border="1" cellspacing="0" cellpadding="10">
      <tr>
        <td>Name</td>
        <td>
          <input type="text" name="name" value="<?php echo $data['sv_name']; ?>" />
          <?php if (!empty($errors['sv_name'])) echo $errors['sv_name']; ?>
        </td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>
          <select name="sex">
            <option value="Nam">Nam</option>
            <option value="Nữ" <?php if ($data['sv_sex'] == 'Nữ') echo 'selected'; ?>>Nu</option>
          </select>
          <?php if (!empty($errors['sv_sex'])) echo $errors['sv_sex']; ?>
        </td>
      </tr>
      <tr>
        <td>Birthday</td>
        <td>
          <input type="text" name="birthday" value="<?php echo $data['sv_birthday']; ?>" />
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="hidden" name="id" value="<?php echo $data['sv_id']; ?>" />
          <input type="submit" name="edit_student" value="Lưu" />
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <style type="text/css">
    button {
      margin-right: 20px;
      padding: 5px;
    }

    form {
      width: 600px;
      margin: auto;
      text-align: center;
    }

    div.form-group {
      width: 90%;
      height: 24px;
      margin: 5px;
    }

    div.form-group input {
      float: right;
      height: 20px;
      width: 400px;
    }

    span {
      font: 18px bold;
      font-weight: bold;
      float: right;
      margin-right: 10px;
    }

    h1 {
      text-align: center;
    }
  </style>
</head>

<body>
  <?php
  $id = $_GET['id'];
  //Kết nối databse
  $con = mysqli_connect('localhost', 'root', '', 'demo');
  //Viết câu SQL lấy tất cả dữ liệu trong bảng players
  $sql = "SELECT * FROM `players` WHERE `id`= " . $id;
  //Chạy câu SQL
  $result = mysqli_query($con, $sql);
  //Gắn dữ liệu lấy được vào mảng $data
  while ($row = mysqli_fetch_assoc($result)) {
    $info = $row;
  }
  ?>
  <form action="process.php?id=<?php echo $id ?>" method="POST">
    <h1>Chỉnh sửa thông tin cầu thủ</h1>
    <div class="form-group">
      <input type="text" name="name" value="<?php echo $info['name'] ?>"><span>Tên cầu thủ: </span>
    </div>
    <div class="form-group">
      <input type="text" name="age" value="<?php echo $info['age'] ?>"><span>Tuổi: </span>
    </div>
    <div class="form-group">
      <input type="text" name="national" value="<?php echo $info['national'] ?>"><span>Quốc tịch: </span>
    </div>
    <div class="form-group">
      <input type="text" name="position" value="<?php echo $info['position'] ?>"><span>Vị trí: </span>
    </div>
    <div class="form-group">
      <input type="text" name="salary" value="<?php echo $info['salary'] ?>"><span>Lương: </span>
    </div>
    <div class="form-group">
      <button type="submit">Cập nhật</button>
      <button type="reset">Reset</button>
      <a href="index.php"><button type="button">Cancle</button></a>
    </div>
  </form>
</body>

</html>
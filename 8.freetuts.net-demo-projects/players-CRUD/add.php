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
  <form action="process.php" method="POST">
    <h1>Thêm Cầu Thủ</h1>
    <div class="form-group">
      <input type="text" name="name"><span>Tên cầu thủ: </span>
    </div>
    <div class="form-group">
      <input type="text" name="age"><span>Tuổi: </span>
    </div>
    <div class="form-group">
      <input type="text" name="national"><span>Quốc tịch: </span>
    </div>
    <div class="form-group">
      <input type="text" name="position"><span>Vị trí: </span>
    </div>
    <div class="form-group">
      <input type="text" name="salary"><span>Lương: </span>
    </div>
    <div class="form-group">
      <button type="submit">Thêm</button>
      <button type="reset">Reset</button>
      <a href="index.php"><button type="button">Cancle</button></a>
    </div>
  </form>
</body>

</html>
<html>

<head>
  <title>Demo Search Basic by freetuts.net</title>
</head>

<body>
  <div align="center">
    <form action="search.php" method="get">
      Search username: <input type="text" name="search" />
      <input type="submit" name="ok" value="search" />
    </form>
  </div>
  <?php
  // Nếu người dùng submit form thì thực hiện
  if (isset($_REQUEST['ok'])) {
    // Gán hàm addslashes để chống sql injection
    $search = addslashes($_GET['search']);

    // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
    if (empty($search)) {
      echo "Yeu cau nhap du lieu vao o trong";
    } else {
      // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
      $sql = "select * from users where username like '%$search%'";

      // Kết nối sql
      $conn = mysqli_connect('localhost', 'root', '', 'basic') or die('Lỗi kết nối');

      // Thực thi câu truy vấn
      $result = mysqli_query($conn, $sql);

      // Đếm số đong trả về trong sql.
      $num = mysqli_num_rows($result);

      // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
      if ($num > 0 && $search != "") {
        // Dùng $num để đếm số dòng trả về.
        echo "$num kết quả trả về với từ khóa <b>$search</b>";

        // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
        echo '<table border="1" cellspacing="0" cellpadding="10">';
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr>';
          echo "<td>{$row['user_id']}</td>";
          echo "<td>{$row['username']}</td>";
          echo "<td>{$row['password']}</td>";
          echo "<td>{$row['email']}</td>";
          echo "<td>{$row['address']}</td>";
          echo '</tr>';
        }
        echo '</table>';
      } else {
        echo "Không tìm thấy kết quả!";
      }
    }
  }
  ?>
</body>

</html>
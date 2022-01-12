<?php
$conn = mysqli_connect('localhost', 'root', '', 'demo') or die('Không thể kết nối tới database');

// Câu truy vấn
$sql = "UPDATE customer SET name = 'TEN MOI' where id = 2";

// DELETE
if (mysqli_query($conn, $sql)) {
  echo 'Cập nhật thành công';
}

// Ngắt kết nối
mysqli_close($conn);
?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'demo') or die('Không thể kết nối tới database');

// Câu truy vấn
$sql = 'DELETE FROM customer WHERE id = 1';

// DELETE
if (mysqli_query($conn, $sql)) {
  echo 'Xóa thành công';
}

// Ngắt kết nối
mysqli_close($conn);
?>
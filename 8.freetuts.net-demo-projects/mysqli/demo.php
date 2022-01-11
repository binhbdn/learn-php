<?php
require('DB_business.php');

// Lớp khách hàng
class Customer extends DB_business
{
  function __construct()
  {
    // Khai báo tên bảng
    $this->_table_name = 'customer';

    // Khai báo tên field id
    $this->_key = 'id';

    // Gọi hàm khởi tạo cha
    parent::__construct();
  }
}

// Khởi tạo lớp khách hàng
$customer = new Customer();

// Thêm khách hàng
$customer->add_new(array(
  'name' => 'Nguyễn Văn Cường',
  'phone' => '0970 306 603'
));

// Xóa khách hàng
$customer->delete_by_id(1);

// Update khách hàng
$customer->update_by_id(array(
  'name' => 'thehalfheart'
), 2);

// Lấy chi tiết khách hàng
var_dump($customer->select_by_id('*', 2));

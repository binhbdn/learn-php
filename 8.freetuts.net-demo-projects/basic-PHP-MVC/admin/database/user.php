<?php if (!defined('IN_SITE')) die('The request not found');

function db_user_get_by_username($username){
    $username = addslashes($username);
    $sql = "SELECT * FROM tb_user where username = '{$username}'";
    return db_get_row($sql);
}

// Hàm validate dữ liệu bảng User
function db_user_validate($data)
{
    // Biến chứa lỗi
    $error = array();
    
    /* VALIDATE CĂN BẢN */
    // Username
    if (isset($data['username']) && $data['username'] == ''){
        $error['username'] = 'Bạn chưa nhập tên đăng nhập';
    }
    
    // Email
    if (isset($data['email']) && $data['email'] == ''){
        $error['email'] = 'Bạn chưa nhập email';
    }
    if (isset($data['email']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL) === false){
        $error['email'] = 'Email không hợp lệ';
    }
    
    // Password
    if (isset($data['password']) && $data['password'] == ''){
        $error['password'] = 'Bạn chưa nhập mật khẩu';
    }
    
    // Re-password
    if (isset($data['password']) && isset($data['re-password']) && $data['password'] != $data['re-password']){
        $error['re-password'] = 'Mật khẩu nhập lại không đúng';
    }
    
    // Level
    if (isset($data['level']) && !in_array($data['level'], array('1', '2'))){
        $error['level'] = 'Level bạn chọn không tồn tại';
    }
    
    /* VALIDATE LIÊN QUAN CSDL */
    // Chúng ta nên kiểm tra các thao tác trước có bị lỗi không, nếu không bị lỗi thì mới
    // tiếp tục kiểm tra bằng truy vấn CSDL
    // Username
    if (!($error) && isset($data['username']) && $data['username']){
        $sql = "SELECT count(id) as counter FROM tb_user WHERE username='".addslashes($data['username'])."'";
        $row = db_get_row($sql);
        if ($row['counter'] > 0){
            $error['username'] = 'Tên đăng nhập này đã tồn tại';
        }
    }
    
    // Email
    if (!($error) && isset($data['email']) && $data['email']){
        $sql = "SELECT count(id) as counter FROM tb_user WHERE email='".addslashes($data['email'])."'";
        $row = db_get_row($sql);
        if ($row['counter'] > 0){
            $error['email'] = 'Email này đã tồn tại';
        }
    }
    
    return $error;
}
?>
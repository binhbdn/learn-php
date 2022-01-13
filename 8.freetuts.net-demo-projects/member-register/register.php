<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
  <form method="post" action="xuly.php">
    <table>
      <tr>
        <td>Username</td>
        <td><input type="text" name="username" value="" /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="text" name="password" value="" /></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email" value="" /></td>
      </tr>
      <tr>
        <td>Phone</td>
        <td><input type="text" name="phone" value="" /></td>
      </tr>
      <tr>
        <td>Level</td>
        <td>
          <select name="level">
            <option value="0">Thành Viên</option>
            <option value="1">Admin</option>
          </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="do-register" value="Đăng Ký" /></td>
      </tr>
    </table>
  </form>
</body>

</html>
<?php
class Student
{
  public static function __callStatic($method, $params)
  {
    echo 'Tên phương thức tĩnh: ' .$method . '<br/>';
    echo 'Tham số truyền vào:<br/>';
    echo '<pre>';
    print_r($params);
    echo '</pre>';
  }

  public function __call($method, $params)
  {
    echo 'Tên phương thức: ' .$method . '<br/>';
    echo 'Tham số truyền vào:<br/>';
    echo '<pre>';
    print_r($params);
    echo '</pre>';
  }
}

Student::setStudent('Nguyễn Văn A', 34, 'anv@gmail.com');
$student = new Student();
$student->get_name('string', 1);
?>
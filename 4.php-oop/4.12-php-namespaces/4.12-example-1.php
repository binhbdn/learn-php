<?php
    namespace Html;
    class Table {
        public $title = "";
        public $numRows = 0;
        public function message() {
            echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
        }
    }
    $table = new Table();
    $table->title = "My table";
    $table->numRows = 5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Namespaces</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Namespaces / PHP OOP - Không gian tên</h1>
    <h2 class="red">PHP OOP - Declaring a Namespace</h2>
    <p class="red">Không gian tên là các qualifier (vòng loại) giải quyết hai vấn đề khác nhau:</p>
    <ol>
        <li>Chúng cho phép tổ chức tốt hơn bằng cách nhóm các lớp làm việc cùng nhau để thực hiện một nhiệm vụ</li>
        <li>Chúng cho phép sử dụng cùng một tên cho nhiều lớp</li>
    </ol>
    <h2 class="red">Ví dụ 1</h2>
    <?php
        $table->message();
    ?>
</body>
</html>
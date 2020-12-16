<?php
    namespace Code\Html;
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
    <p class="red">Có thể có các không gian tên lồng nhau:</p>
    <h2 class="red">Ví dụ 2</h2>
    <?php
        $table->message();
    ?>
</body>
</html>
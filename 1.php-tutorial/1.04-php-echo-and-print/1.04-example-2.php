<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP echo Statements</title>
    <style>
        .red {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Câu lệnh <span class="red">echo</span> và <span class="red">print</span> trong PHP</h1>
    <h2>Câu lệnh PHP <span class="red">echo</span></h2>
    <p>Câu lệnh <span class="red">echo</span> có thể được sử dụng có hoặc không có dấu ngoặc đơn: <span class="red">echo</span> hoặc <span class="red">echo()</span></p>
    <h3>Hiển thị Văn bản</h3>
    <p>Ví dụ sau cho thấy cách xuất văn bản bằng lệnh <span class="red">echo</span> (lưu ý rằng văn bản có thể chứa đánh dấu HTML):</p>
    <p>Thí dụ</p>
    <?php
        echo "<h4>PHP is Fun!</h4>";
        echo("Hello world!<br>");
        echo "I'm about to learn PHP!<br>";
        echo "<span class='red'>This ", "string ", "was ", "made ", "with multiple parameters.</span>";
    ?>
    <h3>Hiển thị các biến</h3>
    <p>Ví dụ sau cho thấy cách xuất văn bản và biến với câu lệnh <span class="red">echo</span>:</p>
    <p>Thí dụ</p>
    <?php
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";
        $x = 5;
        $y = 4;

        echo "<h4>" . $txt1 . "</h4>";
        echo("Study PHP at " . $txt2 . "<br>");
        echo $x + $y;
    ?>
</body>

</html>
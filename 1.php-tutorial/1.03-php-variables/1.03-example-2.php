<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables Scope</title>
    <style>
        .red {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Phạm vi biến PHP</h1>
    <p>Trong PHP, các biến có thể được khai báo ở bất kỳ đâu trong script.</p>
    <p>Phạm vi của một biến là một phần của script nơi biến có thể được tham chiếu / sử dụng.</p>
    <p>PHP có ba phạm vi biến khác nhau:</p>
    <ul>
        <li>local / địa phương</li>
        <li>global / toàn cầu</li>
        index
    </ul>
    <h1>Phạm vi toàn cầu và địa phương</h1>
    <p>Một biến được khai báo bên ngoài một hàm có PHẠM VI TOÀN CẦU và chỉ có thể được truy cập bên ngoài một hàm:</p>
    <p>Thí dụ Biến với phạm vi toàn cầu:</p>
    <?php
    $x = 5; // global scope

    function myTest()
    {
        // using x inside this function will generate an error
        echo "<p>Variable \$x inside function is: $x</p>";
    }
    myTest();

    echo "<p>Variable \$x outside function is: $x</p>";
    ?>
    <p>Một biến được khai báo trong một hàm có PHẠM VI ĐỊA PHƯƠNG và chỉ có thể được truy cập trong hàm đó:</p>
    <p>Thí dụ Biến với phạm vi cục bộ:</p>
    <?php
    function myTest1()
    {
        $x1 = 5; // local scope
        echo "<p>Variable \$x1 inside function is: $x1</p>";
    }
    myTest1();

    // using x outside the function will generate an error
    echo "<p>Variable \$x1 outside function is: $x1</p>";
    echo "<p>Variable \$x outside function is: $x</p>";
    ?>
    <p>Bạn có thể có các biến cục bộ trùng tên trong các hàm khác nhau, bởi vì các biến cục bộ chỉ được công nhận bởi hàm mà chúng được khai báo.</p>
    <h1>PHP Từ khóa toàn cầu / global keyword</h1>
    <p>Từ khóa global được sử dụng để truy cập vào một biến toàn cầu từ bên trong một hàm.</p>
    <p>Để thực hiện việc này, hãy sử dụng từ khóa global trước các biến (bên trong hàm):</p>
    <p>Thí dụ</p>
    <?php
    $x2 = 5;
    $y2 = 10;

    function myTest2()
    {
        global $x2, $y2;
        $y2 = $x2 + $y2;
    }

    myTest2();
    echo $y2; // outputs 15
    ?>
    <p>PHP cũng lưu trữ tất cả các biến toàn cục trong một mảng được gọi là <span class="red">$GLOBALS[index]</span>.</p>
    <p><span class="red">index</span> giữ tên của biến.</p>
    <p>Mảng này cũng có thể truy cập được từ bên trong các hàm và có thể được sử dụng để cập nhật trực tiếp các biến toàn cục.</p>
    <p>Ví dụ trên có thể được viết lại như sau:</p>
    <?php
    $x3 = 5;
    $y3 = 10;

    function myTest3()
    {
        $GLOBALS['y3'] = $GLOBALS['x3'] + $GLOBALS['y3'];
    }

    myTest3();
    echo $y3; // outputs 15
    ?>
    <h1>PHP Từ khóa tĩnh / static keyword</h1>
    <p>Thông thường, khi một hàm được hoàn thành / thực thi, tất cả các biến của nó sẽ bị xóa.</p>
    <p>Tuy nhiên, đôi khi chúng ta muốn một biến cục bộ KHÔNG bị xóa.</p>
    <p>Chúng ta cần nó cho một công việc xa hơn.</p>
    <p>Để làm điều này, hãy sử dụng từ khóa <span class="red">static</span> khi bạn khai báo biến lần đầu tiên:</p>
    <p>Thí dụ</p>
    <?php
        function myTest4()
        {
            static $x4 = 0;
            echo "$x4<br>";
            $x4++;
        }

        myTest4();
        myTest4();
        myTest4();
    ?>
    <p>Sau đó, mỗi lần hàm được gọi, biến đó sẽ vẫn có thông tin mà nó chứa từ lần cuối cùng hàm được gọi.</p>
    <p>Lưu ý: Biến vẫn là cục bộ của hàm.</p>
</body>

</html>
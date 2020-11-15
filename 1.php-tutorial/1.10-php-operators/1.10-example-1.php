<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP Operators</h1>
    <p>Các toán tử được sử dụng để thực hiện các phép toán trên các biến và giá trị.</p>
    <p>PHP chia các toán tử thành các nhóm sau:</p>
    <ul>
        <li>Toán tử số học / Arithmetic operators</li>
        <li>Toán tử gán / Assignment operators</li>
        <li>Toán tử so sánh / Comparison operators</li>
        <li>Toán tử tăng - giảm / Increment - Decrement operators</li>
        <li>Toán tử logic / Logical operators</li>
        <li>Toán tử chuỗi / String operators</li>
        <li>Toán tử mảng / Array operators</li>
        <li>Toán tử gán có điều kiện / Conditional assignment operators</li>
    </ul>
    <h2>Toán tử số học PHP</h2>
    <ul>
        <li>+</li>
        <li>-</li>
        <li>*</li>
        <li>/</li>
        <li>%</li>
        <li>**</li>
    </ul>
    <h2>Toán tử gán</h2>
    <ul>
        <li>=</li>
        <li>+=</li>
        <li>-=</li>
        <li>*=</li>
        <li>/=</li>
        <li>%=</li>
    </ul>
    <h2>Toán tử so sánh</h2>
    <ul>
        <li>==</li>
        <li>===</li>
        <li>!=</li>
        <li><></li>
        <li>!==</li>
        <li>></li>
        <li><</li>
        <li>>=</li>
        <li><=</li>
        <li><=></li>
    </ul>
    <p>$x <=> $y : Trả về một số nguyên nhỏ hơn, bằng hoặc lớn hơn 0, tùy thuộc vào việc $x nhỏ hơn, bằng hay lớn hơn $y. Được giới thiệu trong PHP 7.</p>
    <p>Thí dụ:</p>
    <p>
    <?php
        $x = 5;  
        $y = 10;

        echo ($x <=> $y); // returns -1 because $x is less than $y
        echo "<br>";

        $x = 10;  
        $y = 10;

        echo ($x <=> $y); // returns 0 because values are equal
        echo "<br>";

        $x = 15;  
        $y = 10;

        echo ($x <=> $y); // returns +1 because $x is greater than $y
        ?>
    </p>
    <h2>Toán tử tăng - giảm</h2>
    <ul>
        <li>++$x Increments $x by one, then returns $x</li>
        <li>$x++ Returns $x, then increments $x by one</li>
        <li>--$x Decrements $x by one, then returns $x</li>
        <li>$x-- Returns $x, then decrements $x by one</li>
    </ul>
    <p></p>
    <h2>Toán tử logic</h2>
    <ul>
        <li>and</li>
        <li>or</li>
        <li>xor</li>
        <li>&&</li>
        <li>||</li>
        <li>!</li>
    </ul>
    <h2>Toán tử chuỗi</h2>
    <p>PHP có hai toán tử được thiết kế đặc biệt cho chuỗi.</p>
    <ul>
        <li>. Concatenation</li>
        <li>.= Concatenation assignment</li>
    </ul>
    <p>$txt1 . $txt2 Concatenation of $txt1 and $txt2</p>
    <p>
        <?php
            $txt1 = "Hello";
            $txt2 = " world!";
            echo $txt1 . $txt2;
        ?>
    </p>
    <p>$txt1 .= $txt2 Appends $txt2 to $txt1</p>
    <p>
        <?php
            // $txt1 = "Hello";
            // $txt2 = " world!";
            $txt1 .= $txt2;
            echo $txt1;
        ?>
    </p>
    <h2>Toán tử mảng</h2>
    <ul>
        <li>+</li>
        <li>==</li>
        <li>===</li>
        <li>!=</li>
        <li><></li>
        <li>!==</li>
    </ul>
    <?php
        $x = array("a" => "red", "b" => "green");  
        $y = array("c" => "blue", "d" => "yellow");  

        print_r($x + $y); // union of $x and $y
    ?>
    <h2>Toán tử gán có điều kiện</h2>
    <ul>
        <li>?: Ternary</li>
        <li>?? Null coalescing</li>
    </ul>
    <p>Các toán tử gán có điều kiện trong PHP được sử dụng để gán một giá trị tùy thuộc vào các điều kiện.</p>
    <p>Ternary $x = expr1 ? expr2 : expr3</p>
    <?php
        // if empty($user) = TRUE, set $status = "anonymous"
        echo $status = (empty($user)) ? "anonymous" : "logged in";
        echo("<br>");

        $user = "John Doe";
        // if empty($user) = FALSE, set $status = "logged in"
        echo $status = (empty($user)) ? "anonymous" : "logged in";
    ?>
    <p>
        Returns the value of $x.<br>
        The value of $x is expr2 if expr1 = TRUE.<br>
        The value of $x is expr3 if expr1 = FALSE
    </p>
    <p>Null coalescing $x = expr1 ?? expr2</p>
    <?php
        // variable $user is the value of $_GET['user']
        // and 'anonymous' if it does not exist
        echo $user = $_GET["user"] ?? "anonymous";
        echo("<br>");
        
        // variable $color is "red" if $color does not exist or is null
        echo $color = $color ?? "red";
    ?> 
    <p>
        Returns the value of $x.<br>
        The value of $x is expr1 if expr1 exists, and is not NULL.<br>
        If expr1 does not exist, or is NULL, the value of $x is expr2.<br>
        Introduced in PHP 7
    </p>
</body>

</html>
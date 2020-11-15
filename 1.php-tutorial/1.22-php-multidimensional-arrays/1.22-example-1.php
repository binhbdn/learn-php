<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Multidimensional Arrays</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Multidimensional Arrays - Mảng đa chiều PHP</h1>
    <p>Mảng nhiều chiều là mảng chứa một hoặc nhiều mảng.</p>
    <p>PHP hỗ trợ các mảng đa chiều có độ sâu từ hai, ba, bốn, năm hoặc nhiều hơn. Tuy nhiên, hầu hết mọi người khó quản lý các mảng sâu hơn ba cấp độ.</p>
    <p>A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).</p>
    <p>Mảng hai chiều là một mảng của các mảng (mảng ba chiều là một mảng của các mảng của các mảng).</p>
    <h2>Thí dụ 1</h2>
    <?php
    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );
    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
    echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
    echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
    ?>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date - More Examples</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Date - More Examples</h1>
    <p class="red">Ví dụ dưới đây cho biết số ngày cho đến ngày 4 tháng 7:</p>
    <?php
        $d1=strtotime("July 04");
        $d2=ceil(($d1-time())/60/60/24);
        echo "There are " . $d2 ." days until 4th of July.";
    ?>
</body>
</html>
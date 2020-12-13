<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filters Advanced - Remove Characters With ASCII Value > 127</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Remove Characters With ASCII Value > 127 / Xóa các ký tự có giá trị ASCII> 127</h1>
    <?php
        $str = "<h1>Hello WorldÆØÅ!</h1>";

        $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        echo $newstr;
    ?>
</body>
</html>
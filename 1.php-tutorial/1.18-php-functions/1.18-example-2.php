<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function Arguments</title>
</head>
<body>
    <h1>PHP Function Arguments / Đối số hàm trong PHP</h1>
    <p>Thí dụ sau có một hàm với một đối số ($fname):</p>
    <?php
    function familyName($fname) {
        echo "$fname Refsnes.<br>";
    }

    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");
    ?>
    <p>Thí dụ sau có một hàm có hai đối số ($fname và $year):</p>
    <?php
    function family_name($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
    }

    family_name("Hege", "1975");
    family_name("Stale", "1978");
    family_name("Kai Jim", "1983");
    ?>
</body>
</html>
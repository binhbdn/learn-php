<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Check End-Of-File - feof()</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Check End-Of-File - feof()</h1>
    <?php
        $myfile = fopen("../3.03-php-file-handling/webdictionary.txt", "r") or die("Unable to open file!");
        // Output one line until end-of-file
        while(!feof($myfile)) {
            echo fgets($myfile) . "<br>";
        }
        fclose($myfile);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filters Advanced - Validate URL - Must Contain QueryString</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>Validate URL - Must Contain QueryString / Xác thực URL - Phải Chứa Chuỗi truy vấn</h1>
    <?php
        $url = "https://www.w3schools.com";

        if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
            echo("$url is a valid URL with a query string");
        } else {
            echo("$url is not a valid URL with a query string");
        }
    ?>
</body>
</html>
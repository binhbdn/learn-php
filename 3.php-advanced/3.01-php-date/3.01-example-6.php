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
    <p class="red">Ví dụ dưới đây xuất ra sáu ngày thứ Bảy tiếp theo:</p>
    <?php
        $startdate = strtotime("Saturday");
        $enddate = strtotime("+6 weeks", $startdate);

        while ($startdate < $enddate) {
            echo date("d M", $startdate) . "<br>";
            $startdate = strtotime("+1 week", $startdate);
        }
    ?>
</body>
</html>
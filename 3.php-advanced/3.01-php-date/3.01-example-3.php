<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date - Set Time Zone</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Date - Set Time Zone</h1>
    <p>Nếu thời gian bạn nhận lại từ mã không chính xác, có thể do máy chủ của bạn ở quốc gia khác hoặc được thiết lập cho múi giờ khác.</p>
    <p>Vì vậy, nếu bạn cần thời gian chính xác theo một vị trí cụ thể, bạn có thể đặt múi giờ bạn muốn sử dụng.</p>
    <p>Ví dụ bên dưới đặt múi giờ thành "Vietnam/Ha_Noi", sau đó xuất ra thời gian hiện tại ở định dạng được chỉ định:</p>
    <?php
        date_default_timezone_set("Vietnam/Ha_Noi");
        echo "The time is " . date("h:i:sa");
    ?>
</body>
</html>
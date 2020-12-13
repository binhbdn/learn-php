<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The try...catch...finally Statement</title>
</head>
<body>
    <h1>The try...catch...finally Statement</h1>
    <p>Câu lệnh try...catch...finally có thể được sử dụng để bắt các ngoại lệ. Mã trong khối finally sẽ luôn chạy bất kể có bắt được ngoại lệ hay không. Nếu có finally, khối catch là tùy chọn.</p>
    <?php
        function divide($dividend, $divisor) {
            if($divisor == 0) {
                throw new Exception("Division by zero");
            }
            return $dividend / $divisor;
        }
        
        try {
            echo divide(5, 0);
        } catch(Exception $e) {
            echo "Unable to divide. ";
        } finally {
            echo "Process complete.";
        }
    ?>
</body>
</html>
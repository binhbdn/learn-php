<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The try...catch Statement</title>
</head>
<body>
    <h1>The try...catch Statement</h1>
    <p>Để tránh lỗi từ ví dụ trước, chúng ta có thể sử dụng câu lệnh try...catch để bắt các ngoại lệ và tiếp tục quá trình:</p>
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
            echo "Unable to divide.";
        }
    ?>
</body>
</html>
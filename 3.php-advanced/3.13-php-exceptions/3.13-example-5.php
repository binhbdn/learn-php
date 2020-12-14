<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Exception Object</title>
</head>
<body>
    <h1>The Exception Object</h1>
    <p>Đối tượng Ngoại lệ chứa thông tin về lỗi hoặc hành vi không mong muốn mà hàm gặp phải.</p>
    <p>Syntax</p>
    <p>new Exception(message, code, previous)</p>
    <p>Methods</p>
    <ul>
        <li>getMessage()</li>
        <li>getPrevious()</li>
        <li>getCode()</li>
        <li>getFile()</li>
        <li>getLine()</li>
    </ul>
    <p>Example</p>
    <?php
        function divide($dividend, $divisor) {
            if($divisor == 0) {
                throw new Exception("Division by zero", 1);
            }
            return $dividend / $divisor;
        }
        
        try {
            echo divide(5, 0);
        } catch(Exception $ex) {
            $code = $ex->getCode();
            $message = $ex->getMessage();
            $file = $ex->getFile();
            $line = $ex->getLine();
            echo "Exception thrown in $file on line $line: [Code $code]
            $message";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Throwing an Exception</title>
</head>
<body>
    <h1>Throwing an Exception</h1>
    <p>Lets try to throw an exception without catching it:</p>
    <?php
        function divide($dividend, $divisor) {
            if($divisor == 0) {
                throw new Exception("Division by zero");
            }
            return $dividend / $divisor;
        }
        
        echo divide(5, 0);
    ?>
</body>
</html>
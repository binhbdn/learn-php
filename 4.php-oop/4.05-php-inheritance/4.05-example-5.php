<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - The final Keyword</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - The final Keyword</h1>
    <p>The final keyword can be used to prevent class inheritance or to prevent method overriding.</p>
    <p>Từ khóa <span class="red">final</span> có thể được sử dụng để ngăn chặn lớp kế thừa hoặc ngăn chặn ghi đè phương thức.</p>
    <h2 class="red">Ví dụ 1: ngăn kế thừa lớp:</h2>
    <?php
        final class Fruit {
            // some code
        }
        
        // will result in error
        class Strawberry extends Fruit {
            // some code
        }
    ?>
</body>
</html>
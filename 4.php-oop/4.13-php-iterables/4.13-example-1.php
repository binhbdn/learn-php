<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Iterables</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Iterables / PHP OOP - Lặp lại</h1>
    <h2 class="red">PHP OOP - What is an Iterable? / PHP OOP - Có thể lặp lại là gì?</h2>
    <p class="red">Một Iterable là bất kỳ giá trị nào có thể được lặp lại bằng một vòng lặp foreach().</p>
    <p>The iterable pseudo-type was introduced in PHP 7.1, and it can be used as a data type for function arguments and function return values.</p>
    <p class="red">Kiểu giả terable đã được giới thiệu trong PHP 7.1 và nó có thể được sử dụng như một kiểu dữ liệu cho các đối số của hàm và giá trị trả về của hàm.</p>
    <h2 class="red">PHP OOP - Using Iterables</h2>
    <h3 class="red">Ví dụ 1 (Sử dụng đối số hàm có thể lặp lại:)</h3>
    <?php
        function printIterable(iterable $myIterable) {
            foreach($myIterable as $item) {
                echo $item;
            }
        }

        $arr = ["a", "b", "c"];
        printIterable($arr);
    ?>
</body>
</html>
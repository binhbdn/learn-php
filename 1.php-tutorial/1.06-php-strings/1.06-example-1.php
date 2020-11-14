<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strings</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP Strings / Chuỗi PHP</h1>
    <p>Chuỗi là một chuỗi các ký tự, chẳng hạn như "Hello world!".</p>
    <h2>PHP String Functions / Các hàm chuỗi PHP</h2>
    <p>Trong chương này chúng ta sẽ xem xét một số hàm thường được sử dụng để thao tác trên chuỗi.</p>
    <h3><span class="red">strlen()</span> - Trả về độ dài của một chuỗi</h3>
    <p>Thí dụ Trả về độ dài của chuỗi "Hello world!": <?php echo strlen("Hello world!"); /* outputs 12 */ ?></p>
    <h3><span class="red">str_word_count()</span> - Đếm từ trong một chuỗi</h3>
    <p>Thí dụ Đếm số từ trong chuỗi "Hello world!": <?php echo str_word_count("Hello world!"); /* outputs 2 */ ?></p>
    <h3><span class="red">strrev()</span> - Đảo ngược một chuỗi</h3>
    <p>Thí dụ Đảo ngược chuỗi "Hello world!": <?php echo strrev("Hello world!"); /* outputs !dlrow olleH */ ?></p>
    <h3><span class="red">strpos()</span> - Tìm kiếm văn bản trong chuỗi</h3>
    <p>Hàm PHP <span class="red">strpos()</span> tìm kiếm một văn bản cụ thể trong một chuỗi.</p>
    <p>Nếu tìm thấy kết quả phù hợp, hàm trả về vị trí ký tự của kết quả khớp đầu tiên.</p>
    <p>Nếu không tìm thấy kết quả phù hợp nào, nó sẽ trả về <span class="red">FALSE</span>.</p>
    <p>Thí dụ Tìm kiếm văn bản "world" trong chuỗi "Hello world!": <?php echo strpos("Hello world!", "world"); /* outputs 6 */ ?></p>
    <p>Mẹo: Vị trí ký tự đầu tiên trong một chuỗi là 0 (không phải 1).</p>
    <h3><span class="red">str_replace</span> - Thay thế văn bản trong một chuỗi</h3>
    <p>Hàm PHP <span class="red">str_replace</span> thay thế một số ký tự bằng một số ký tự khác trong một chuỗi.</p>
    <p>Thí dụ Thay thế văn bản "world" bằng "Dolly" trong chuỗi "Hello world!": <?php echo str_replace("world", "Dolly", "Hello world!"); /* outputs Hello Dolly! */ ?></p>
    <h2>Complete PHP String Reference / Tham khảo danh sách đầy đủ các hàm về chuỗi PHP</h2>
    <p>Hãy truy cập <a href="https://www.w3schools.com/php/php_ref_string.asp">Danh sách đầy đủ các hàm về chuỗi PHP</a></p>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Regular Expressions - Syntax</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP Regular Expressions - Syntax</h1>
    <p>Trong PHP, biểu thức chính quy là các chuỗi bao gồm <span class="red">delimiters</span> (các dấu phân cách), một <span class="red">pattern</span> (mẫu) và các <span class="red">modifiers</span> (công cụ điều chỉnh) tùy chọn.</p>
    <p>$exp = "/w3schools/i";</p>
    <? $exp = "/w3schools/i"; ?>
    <p>Trong ví dụ trên, <span class="red">/</span> là <span class="red">delimiter</span> (dấu phân cách) , <span class="red">w3schools</span> là <span class="red">pattern</span> (mẫu) đang được tìm kiếm và <span class="red">i</span> là một <span class="red">modifier</span> (công cụ điều chỉnh) giúp tìm kiếm không phân biệt chữ hoa chữ thường.</p>
    <p><span class="red">Delimiters</span> (Các dấu phân cách) có thể là bất kỳ ký tự nào không phải là chữ cái, số, <span class="red">backslash \</span> (dấu gạch chéo ngược) hoặc dấu cách. Dấu phân cách phổ biến nhất là dấu gạch chéo lên <span class="red">/ (forward slash)</span>, nhưng khi mẫu của bạn chứa dấu gạch chéo lên, bạn có thể chọn các dấu phân cách khác như <span class="red">#</span> hoặc <span class="red">~</span>.</p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filters - PHP filter_var() Function - Validate an Integer</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1>PHP <span class="red">filter_var()</span> Function</h1>
    <p>Hàm <span class="red">filter_var()</span> dùng để xác thực và làm sạch dữ liệu</p>
    <p>Hàm <span class="red">filter_var()</span> dùng để xác thực và làm sạch dữ liệu của một biến duy nhất với một bộ lọc được chỉ định, nó cần 2 đối số:</p>
    <ul>
        <li>Biến bạn muốn kiểm tra</li>
        <li>Loại kiểm tra được sử dụng</li>
    </ul>
    <h2 class="red">Validate an Integer / Xác thực một số nguyên</h2>
    <p>Ví dụ sau sử dụng hàm <span class="red">filter_var()</span> để kiểm tra xem biến <span class="red">$int</span> có phải là số nguyên hay không. Nếu <span class="red">$int</span> là một số nguyên, đầu ra của đoạn mã dưới đây sẽ là: <span class="red">"Integer is valid"</span>. Nếu <span class="red">$int</span> không phải là số nguyên, kết quả sẽ là: <span class="red">"Integer is not valid"</span>:</p>
    <span class="red">
        <?php
            $int = 0;
            echo "\$int = " . $int . "<br>";
            if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
                echo("Integer is valid");
            } else {
                echo("Integer is not valid");
            }
        ?>
    </span>
    <h2 class="red">Mẹo: filter_var() và Sự cố với 0</h2>
    <p>Trong ví dụ trên, nếu <span class="red">$int</span> được đặt thành 0, hàm trên sẽ trả về <span class="red">"Integer is not valid"</span>. Để giải quyết vấn đề này, hãy sử dụng mã bên dưới:</p>
    <span class="red">
        <?php
            $int = 0;
            echo "\$int = " . $int . "<br>";
            if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
                echo("Integer is valid");
            } else {
                echo("Integer is not valid");
            }
        ?>
    </span>
</body>
</html>
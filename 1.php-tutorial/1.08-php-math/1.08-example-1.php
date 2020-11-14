<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Math</title>
    <style>.red {color:red;}</style>
</head>

<body>
    <h1>PHP Math</h1>
    <p>PHP có một tập hợp các hàm toán học cho phép bạn thực hiện các nhiệm vụ toán học trên các con số.</p>
    <h2>Hàm <span class="red">pi()</span> trong PHP</h2>
    <p>Hàm <span class="red">pi()</span> trả về giá trị của PI.</p>
    <p>Thí dụ: PI = <?php echo(pi());/* returns 3.1415926535898 */?></p>
    <h2>Các hàm <span class="red">min()</span> và <span class="red">max()</span> trong PHP</h2>
    <p>Các hàm <span class="red">min()</span> và <span class="red">max()</span> có thể được sử dụng để tìm giá trị thấp nhất hoặc cao nhất trong danh sách các đối số</p>
    <p>Thí dụ: min(0, 150, 30, 20, -8, -200) = <?php echo(min(0, 150, 30, 20, -8, -200));/* returns -200 */?></p>
    <p>Thí dụ: max(0, 150, 30, 20, -8, -200) = <?php echo(max(0, 150, 30, 20, -8, -200));/* returns 150 */?></p>
    <h2>Hàm <span class="red">abs()</span> trong PHP</h2>
    <p>Hàm <span class="red">abs()</span> trả về giá trị tuyệt đối (giá trị dương) của một số.</p>
    <p>Thí dụ: abs(-6.7) = <?php echo(abs(-6.7));/* returns 6.7 */?></p>
    <h2>Hàm <span class="red">sqrt()</span> trong PHP</h2>
    <p>Hàm <span class="red">sqrt()</span> trả về căn bậc hai của một số.</p>
    <p>Thí dụ: sqrt(64) = <?php echo(sqrt(64));/* returns 8 */?></p>
    <h2>Hàm <span class="red">round()</span> trong PHP</h2>
    <p>Hàm <span class="red">round()</span> làm tròn một số dấu chấm động đến số nguyên gần nhất của nó.</p>
    <p>Thí dụ: round(0.60) = <?php echo(round(0.60));/* returns 1 */?></p>
    <p>Thí dụ: round(0.49) = <?php echo(round(0.49));/* returns 0 */?></p>
    <h2>Số ngẫu nhiên trong PHP</h2>
    <p>Hàm <span class="red">rand()</span> tạo ra một số ngẫu nhiên.</p>
    <p>Thí dụ: Số ngẫu nhiên rand() = <?php echo(rand());?></p>
    <p class="red">Để kiểm soát nhiều hơn số ngẫu nhiên, bạn có thể thêm các tham số tối thiểu và tối đa tùy chọn để chỉ định số nguyên thấp nhất và số nguyên cao nhất sẽ được trả về.</p>
    <p>Ví dụ: nếu bạn muốn một số nguyên ngẫu nhiên từ 10 đến 100 (bao gồm), hãy sử dụng rand(10, 100):</p>
    <p>rand(10, 100) = <?php echo rand(10, 100)?></p>
    <h1>Toàn bộ tài liệu tham khảo về PHP Math</h1>
    <a href="https://www.w3schools.com/php/php_ref_math.asp">PHP Math Reference</a>
</body>

</html>
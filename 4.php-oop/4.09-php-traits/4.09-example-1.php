<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Traits</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Traits</h1>
    <h2 class="red">PHP OOP - What are Traits? / PHP OOP - Traits (Đặc điểm) là gì?</h2>
    <p class="red">PHP chỉ hỗ trợ kế thừa đơn: một lớp con chỉ có thể kế thừa từ một lớp cha duy nhất.</p>
    <p class="red">Vì vậy, điều gì sẽ xảy ra nếu một lớp cần kế thừa nhiều hành vi (từ nhiều lớp)? PHP - Traits (Đặc điểm) giải quyết vấn đề này.</p>
    <p class="red">Traits (Đặc điểm) được sử dụng để khai báo các phương thức có thể được sử dụng trong nhiều lớp.</p>
    <p>Traits (Đặc điểm) có thể có các phương thức và phương thức trừu tượng mà chúng có thể được sử dụng trong nhiều lớp (con) và các phương thức đó có thể có bất kỳ công cụ sửa đổi truy cập nào (công khai, riêng tư hoặc bảo vệ).</p>
    <p>Traits (Đặc điểm) được khai báo với từ khóa <span class="red">trait</span></p>
    <h3 class="red">Cú pháp</h3>
    <pre>
        &lt;?php
            trait TraitName {
                // some code...
            }
        ?>
    </pre>
    <p>Để sử dụng một Traits (Đặc điểm) trong một lớp, hãy sử dụng từ khóa <span class="red">use</span></p>
    <h3 class="red">Cú pháp</h3>
    <pre>
        &lt;?php
            class MyClass {
                use TraitName;
            }
        ?>
    </pre>
    <h2 class="red">Ví dụ 1</h2>
    <?php
        trait message1 {
            public function msg1() {
                echo "OOP is fun! ";
            }
        }

        class Welcome {
            use message1;
        }

        $obj = new Welcome();
        $obj->msg1();
    ?>
</body>
</html>
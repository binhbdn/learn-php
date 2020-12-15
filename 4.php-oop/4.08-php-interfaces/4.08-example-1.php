<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Interfaces</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Interfaces</h1>
    <h2 class="red">PHP - What are Interfaces?</h2>
    <p>Các giao diện cho phép bạn chỉ định các phương thức mà một lớp nên triển khai.</p>
    <p>Các giao diện giúp bạn dễ dàng sử dụng nhiều lớp khác nhau theo cùng một cách. Khi một hoặc nhiều lớp sử dụng cùng một giao diện, nó được gọi là "đa hình".</p>
    <p>Các giao diện được khai báo với từ khóa <span class="red">interface</span>.</p>
    <h3 class="">Cú pháp</h3>
    <pre>
    &lt;?php
        interface InterfaceName {
            public function someMethod1();
            public function someMethod2($name, $color);
            public function someMethod3() : string;
        }
    ?>
    </pre>
    <h2 class="red">PHP - Interfaces vs. Abstract Classes</h2>
    <p>Giao diện tương tự như lớp trừu tượng. Sự khác biệt giữa giao diện và lớp trừu tượng là:</p>
    <ul class="red">
        <li>Giao diện không thể có thuộc tính, trong khi các lớp trừu tượng có thể</li>
        <li>Tất cả các phương thức giao diện phải là công khai, trong khi các phương thức lớp trừu tượng là công khai hoặc được bảo vệ</li>
        <li>Tất cả các phương thức trong một giao diện là trừu tượng, vì vậy chúng không thể được triển khai trong mã và từ khóa trừu tượng là không cần thiết</li>
        <li>Các lớp có thể triển khai một giao diện đồng thời kế thừa từ một lớp khác</li>
    </ul>
    <h2 class="red">PHP - Using Interfaces</h2>
    <p>Để triển khai một giao diện, một lớp phải sử dụng từ khóa <span class="red">implements</span>.</p>
    <p class="red">Một lớp triển khai một giao diện phải triển khai tất cả các phương thức của giao diện.</p>
    <h2 class="red">Ví dụ 1</h2>
    <?php
        interface Animal {
            public function makeSound();
        }

        class Cat implements Animal {
            public function makeSound() {
                echo "Meow";
            }
        }

        $animal = new Cat();
        $animal->makeSound();
    ?>
</body>
</html>
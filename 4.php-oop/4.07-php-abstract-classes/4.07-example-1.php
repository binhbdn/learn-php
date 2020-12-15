<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Abstract Classes</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - Abstract Classes</h1>
    <h2 class="red">PHP - Các lớp và phương thức trừu tượng là gì?</h2>
    <p>Các lớp và phương thức trừu tượng là khi lớp cha có một phương thức được đặt tên, nhưng cần (các) lớp con của nó để điền các tác vụ.</p>
    <p>Một lớp trừu tượng là một lớp có chứa ít nhất một phương thức trừu tượng. Một phương thức trừu tượng là một phương thức được khai báo, nhưng không được triển khai trong mã.</p>
    <p>Một lớp hoặc phương thức trừu tượng được định nghĩa bằng từ khóa <span class="red">abstract</span>:</p>
    <h2 class="red">Cú pháp</h2>
    <pre>
    &lt;?php
        abstract class ParentClass {
            abstract public function someMethod1();
            abstract public function someMethod2($name, $color);
            abstract public function someMethod3() : string;
        }
    ?&gt;
    </pre>
    <p>Khi kế thừa từ một lớp trừu tượng, phương thức lớp con phải được định nghĩa với cùng một tên và một công cụ sửa đổi có mức bị hạn chế truy cập ít hơn hoặc có cùng mức bị hạn chế truy cập giống nhau. Vì vậy, nếu phương thức trừu tượng được định nghĩa là <span class="red">protected</span>, phương thức lớp con phải được định nghĩa là <span class="red">protected</span> hoặc <span class="red">public</span>, nhưng không phải là <span class="red">private</span>. Ngoài ra, loại và số lượng đối số bắt buộc phải giống nhau. Tuy nhiên, các lớp con có thể có các đối số tùy chọn.</p>
    <p>Vì vậy, khi một lớp con được kế thừa từ một lớp trừu tượng, chúng ta có các quy tắc sau:</p>
    <ul>
        <li>Phương thức lớp con phải được định nghĩa với cùng tên và nó khai báo lại phương thức trừu tượng mẹ</li>
        <li>Phương thức lớp con phải được xác định với công cụ sửa đổi quyền truy cập giống hoặc ít bị hạn chế hơn</li>
        <li>Số lượng đối số bắt buộc phải giống nhau. Tuy nhiên, lớp con có thể có thêm các đối số tùy chọn</li>
    </ul>
    <h2 class="red">Ví dụ 1</h2>
    <?php
        // Parent class
        abstract class Car {
            public $name;
            public function __construct($name) {
                $this->name = $name;
            }
            abstract public function intro() : string;
        }

        // Child classes
        class Audi extends Car {
            public function intro() : string {
                return "Choose German quality! I'm an $this->name!";
            }
        }

        class Volvo extends Car {
            public function intro() : string {
                return "Proud to be Swedish! I'm a $this->name!";
            }
        }

        class Citroen extends Car {
            public function intro() : string {
                return "French extravagance! I'm a $this->name!";
            }
        }

        // Create objects from the child classes
        $audi = new audi("Audi");
        echo $audi->intro();
        echo "<br>";

        $volvo = new volvo("Volvo");
        echo $volvo->intro();
        echo "<br>";

        $citroen = new citroen("Citroen");
        echo $citroen->intro();
        ?>
</body>
</html>
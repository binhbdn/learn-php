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
    <h2 class="red">PHP OOP - Creating Iterables</h2>
    <p>Tất cả các mảng đều có thể lặp lại, vì vậy bất kỳ mảng nào cũng có thể được sử dụng làm đối số của một hàm yêu cầu có thể lặp lại.</p>
    <p class="red">Bất kỳ đối tượng nào triển khai từ giao diện Iterator đều có thể được sử dụng làm đối số của một hàm yêu cầu có thể lặp lại.</p>
    <p class="red">Một iterator chứa danh sách các mục và cung cấp các phương thức để lặp qua chúng. Nó giữ một con trỏ đến một trong các phần tử trong danh sách. Mỗi mục trong danh sách phải có một khóa có thể được sử dụng để tìm mục đó.</p>
    <p>Một iterator phải có các phương thức sau:</p>
    <ul>
        <li>current() - Trả về phần tử mà con trỏ hiện đang trỏ tới. Nó có thể là bất kỳ kiểu dữ liệu nào</li>
        <li>key() - Trả về khóa được liên kết với phần tử hiện tại trong danh sách. Nó chỉ có thể là một số nguyên, float, boolean hoặc string</li>
        <li>next() - Di chuyển con trỏ đến phần tử tiếp theo trong danh sách</li>
        <li>rewind() - Di chuyển con trỏ đến phần tử đầu tiên trong danh sách</li>
        <li>valid() - Nếu con trỏ bên trong không trỏ đến bất kỳ phần tử nào (ví dụ: nếu next() được gọi ở cuối danh sách), điều này sẽ trả về false. Nó trả về true trong bất kỳ trường hợp nào khác</li>
    </ul>
    <h3 class="red">Ví dụ 3 (Triển khai giao diện Iterator và sử dụng nó như một iterable:)</h3>
    <?php
        // Create an Iterator
        class MyIterator implements Iterator {
            private $items = [];
            private $pointer = 0;

            public function __construct($items) {
                // array_values() makes sure that the keys are numbers
                $this->items = array_values($items);
            }

            public function current() {
                return $this->items[$this->pointer];
            }

            public function key() {
                return $this->pointer;
            }

            public function next() {
                $this->pointer++;
            }

            public function rewind() {
                $this->pointer = 0;
            }

            public function valid() {
                // count() indicates how many items are in the list
                return $this->pointer < count($this->items);
            }
        }

        // A function that uses iterables
        function printIterable(iterable $myIterable) {
            foreach($myIterable as $item) {
                echo $item;
            }
        }

        // Use the iterator as an iterable
        $iterator = new MyIterator(["a", "b", "c"]);
        printIterable($iterator);
    ?>
</body>
</html>
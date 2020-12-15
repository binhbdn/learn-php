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
    <h2 class="red">Ví dụ 2</h2>
    <?php
        abstract class ParentClass {
            // Abstract method with an argument
            abstract protected function prefixName($name);
        }
        
        class ChildClass extends ParentClass {
            public function prefixName($name) {
                if ($name == "John Doe") {
                    $prefix = "Mr.";
                } elseif ($name == "Jane Doe") {
                    $prefix = "Mrs.";
                } else {
                    $prefix = "";
                }
                return "{$prefix} {$name}";
            }
        }
        
        $class = new ChildClass;
        echo $class->prefixName("John Doe");
        echo "<br>";
        echo $class->prefixName("Jane Doe");
    ?>
</body>
</html>
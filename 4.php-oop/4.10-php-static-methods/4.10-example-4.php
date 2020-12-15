<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - More on Static Methods</title>
    <style>.red{color:red;}</style>
</head>
<body>
    <h1 class="red">PHP OOP - More on Static Methods</h1>
    <p class="red">Để gọi một phương thức tĩnh từ một lớp con, hãy sử dụng từ khóa parent bên trong lớp con. Ở đây, phương thức tĩnh có thể là public hoặc protected.</p>
    <h2 class="red">Ví dụ 4</h2>
    <?php
        class domain {
            protected static function getWebsiteName() {
                return "W3Schools.com";
            }
        }
        
        class domainW3 extends domain {
            public $websiteName;
            public function __construct() {
                $this->websiteName = parent::getWebsiteName();
            }
        }
        
        $domainW3 = new domainW3;
        echo $domainW3 -> websiteName;
    ?>
</body>
</html>
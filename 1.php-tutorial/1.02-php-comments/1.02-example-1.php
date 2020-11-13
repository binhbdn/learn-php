<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Comments</title>
</head>
<body>
    <h1>Nhận xét bằng PHP</h1>
    <p>Chú thích trong mã PHP là một dòng không được thực thi như một phần của chương trình. Mục đích duy nhất của nó là được đọc bởi ai đó đang xem mã.</p>
    <p>Nhận xét có thể được sử dụng để:</p>
    <ul>
        <li>Để người khác hiểu mã của bạn</li>
        <li>Nhắc nhở bản thân về những gì bạn đã làm - Hầu hết các lập trình viên đã trải qua kinh nghiệm quay lại công việc của họ một hoặc hai năm sau đó và phải tìm hiểu lại những gì họ đã làm. Nhận xét có thể nhắc nhở bạn về những gì bạn đã nghĩ khi viết mã</li>
    </ul>
    <p>PHP hỗ trợ một số cách bình luận:</p>
    <ul>
        <li>nhận xét một dòng</li>
        <li>nhận xét nhiều dòng</li>
        <li>nhận xét để loại bỏ các phần của mã</li>
    </ul>
    <?php
        // This is a single-line comment
        # This is also a single-line comment
        echo "PHP Comments!<br>";
/*         
        This is a multiple-lines comment block
        that spans over multiple
        lines
 */
        // You can also use comments to leave out parts of a code line
        $x = 5 /* + 15 */ + 5;
        echo $x;
    ?>
</body>
</html>
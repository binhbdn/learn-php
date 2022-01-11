<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Connect to MySQL</title>
</head>

<body>
  <p>PHP 5 and later can work with a MySQL database using:</p>
  <ul>
    <li><strong>MySQLi extension</strong> (the "i" stands for improved)</li>
    <li><strong>PDO (PHP Data Objects)</strong></li>
  </ul>
  <h1>Should I Use MySQLi or PDO?</h1>
  <p>If you need a short answer, it would be "Whatever you like".</p>
  <p>Both MySQLi and PDO have their advantages:</p>
  <p>PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.</p>
  <p>So, if you have to switch your project to use another database, PDO makes the process easy. You only have to change the connection string and a few queries. With MySQLi, you will need to rewrite the entire code - queries included.</p>
  <p>Both are object-oriented, but MySQLi also offers a procedural API.</p>
  <p>Both support Prepared Statements. Prepared Statements protect from SQL injection, and are very important for web application security.</p>

  <h1>MySQL Examples in Both MySQLi and PDO Syntax</h1>
  <p>In this, and in the following chapters we demonstrate three ways of working with PHP and MySQL:</p>
  <ul>
    <li>MySQLi (object-oriented)</li>
    <li>MySQLi (procedural)</li>
    <li>PDO</li>
  </ul>
</body>

</html>
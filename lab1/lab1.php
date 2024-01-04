<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Bài 1 -->
    <h2>Bài 1</h2>
    <?php
    echo "Hello <br>";
    echo ("Hello <br>");
    echo "Hello World! <br>";
    echo "Hello ",  "World! <br>";
    ?>
    <h2>Bài 2</h2>
    <!-- Bài 2 -->
    <?php
    $str = "Hello World!";
    $x = 200;
    $y = 44.6;
    echo "string is: $str <br>";
    echo "interger is: $x <br>";
    echo "float is: $y <br>";
    ?>
    <!-- Bài 3 -->
    <h2>Bài 3</h2>
    <?php
    $color = "red";
    echo "My car is" . $color . " <br>";
    echo "My house is " . $color . " <br>";
    echo "My boat is " . $color . " <br>";
    ?>
</body>

</html>
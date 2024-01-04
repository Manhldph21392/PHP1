<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Bài 1</h2>
    <?php
    $x = (2 == 3);
    $x = (2 != 3);
    $x = (2 <> 3);
    $x = (2 === 3);
    $x = (2 !== 3);
    $x = (2 > 3);
    $x = (2 < 3);
    $x = (2 >= 3);
    $x = (2 <= 3);
    ?>
    <h2>Bài 2</h2>
    <?php
    $s = "Hello\nWorld!";
    echo $s;
    $s = 'It\'s\n';
    echo $s;
    echo '\nHello <br> World!';
    echo "\u{00C2A9}";
    echo "\u{C2A9}";
    ?>
    <?php
    $a = "hello";
    $$a = 'world';
    echo "$a ${$a} <br>";
    ?>
    <h2>Bài 2</h2>
   

    <?php
    $a = 5;
    $b = 10;
    $sum = $a + $b;
    echo "$sum <br>";
    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    //Bài 1
    <?php 
    $color = array("red","green","blue","yellow");
    print_r($color);
    echo "<br>";
    echo $color[0];

    $age = array();
    $age[0] = 10;
    $age[1] = 20;
    $age[3] = 30;
    print_r($age);
    ?>

    //Bài 2
    <?php
    $salaries = array(
        "John" => 1000,
        "Mary" => 2000,
        "Peter" => 3000
    );
    echo "Salary of John is" .$salaries ["John"];
    echo "Salary of Peter is" .$salaries ["Peter"];
    echo "Salary of Mary is" .$salaries ["Mary"];
    ?>
    //Bài 3

    <?php 
    define('LOCATOR', '/locator');
    define('PORT', '8080');
    define('HOST', 'http://localhost');
    define('BASE', '');
    ?>
</body>
</html>
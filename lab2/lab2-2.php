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
    $age = 50;
    if ($age < 30) {
        echo "Your age is less than 30";
    } elseif ($age > 30 && $age < 50) {
        echo "Your age is between 30 and 50";
    } else {
        echo "Your age is greater than 50";
    }
    ?>
    //Bài 2
    <?php
    $max = 0;
    echo $i = 0;
    echo ", ";
    echo $j = 1;
    $result = 0;
    while ($max < 10) {
        $result = $i + $j;
        $i = $j;
        $j = $result;
        $max = $max + 1;
        echo $result;
        echo ", ";
    }
    ?>
    //Bài 3
    <?php
    $fruits = array("apple", "banana", "orange");
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }
    $employee = array("name" => "John", "salary" => 5000);
    foreach ($employee as $key => $value) {
        echo sprintf(("%s: %s<br>"), $key, $value);
        echo "<br>";
    }
    ?>
    //Bài 4
    <?php
    echo 'Simple text';
    for ($i = 1; $i <= 22; $i++) {
        echo "\n" . '$i = ' . $i;
        for ($j = 1; $j <= 5; $j++) {
            break;
        }
        echo '$i = ' . $j . '';
    }

    echo "Multi-level Break";
    for("\n".$i = 1; $i <= 22; $i++){
        echo "\n" . '$i = ' . $i;
        for("\n".$j = 1; $j <= 5; $j++){
            break 2;
        }
        echo '$i = ' . $j . '';
    }

    ?>
</body>

</html>
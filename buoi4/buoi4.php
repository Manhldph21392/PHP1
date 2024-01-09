<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php
            $x = 1;
            if ($x == 1)
                echo 'x la 1';
            elseif ($x == 1)
                echo 'x la 2';
            else
                echo 'x khong phai 1 hoac 2';
            ?>
    <?php
    $color = "red";
    switch ($color) {
        case "red":
            echo "Nó là màu đỏ";
            break;
        case "blue":
            echo "Nó là màu xanh";
            break;
        case "black":
            echo "Nó là màu đen";
            break;
        default:
            "Không phải màu gì";
    }
    ?> -->
    <?php
    $x = 10;
    $y = ($x == 10) ? "x = 1" : "x = 0";
    echo $y;

    $output = match ($x) {
        1 => "True ",
        2 => "False ",
        default => "Unknown",
    };
    echo $output
    ?>
    <?php
    $i  = 0;
    $num = 50;
    // Do while
    do {
        $num--;
        $i++;
        echo "The number is: $num";
    } while (($i < 10));
    // While
    while ($i > 10) {
        $num++;
        $i--;
        echo "The number is: $num";
    }
    ?>
</body>

</html>
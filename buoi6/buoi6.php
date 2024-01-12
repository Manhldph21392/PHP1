<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $x = 10;
    // function printOne($x)
    // {
    //     for ($i = 1; $i <= $x; $i++) {
    //         echo $i . ' ';
    //     }
    // }

    // printOne(10);
    function printOddNumbers($x)
    {
        for ($i = 1; $i <= $x; $i += 2) {
            echo $i . ' ';
        }
    }
    printOddNumbers(($x));

    function sumNumbers($x)
    {
        $sum = 0;

        for ($i = 1; $i <= $x; $i += 2) {
            $sum += $i;
        }

        return $sum;
    };
    $result = sumNumbers(10);
    echo "Tổng các số lẻ từ 0 đến 10 là: $result";
    ?>



</body>

</html>
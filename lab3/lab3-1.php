<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // hàm ẩn danh
    // bài 1
    $say = function ($name) {
        echo "Hello" . $name;
    };
    $say("Words");

    function myCaller($myCallback)
    {
        echo $myCallback();
    }
    myCaller(function () {
        echo "Hello";
    });

    $a = array(1, 2, 3, 4, 5);
    $b = array_map(function ($n) {
        return $n * $n * $n;
    }, $a);
    print_r($b);

    // Bài 2
    function countToFive()
    {
        yield 1;
        yield from [2, 3, 4];
        yield 5;
    }
    foreach (countToFive() as $v) {
        echo $v;
    }

    // Bài 3
    $str = "082307";
    $hour = substr($str, 0, 2);
    $minute = substr($str, 2, 2);
    $second = substr($str, 4, 2);
    $result = $hour . ':' . $minute . ':' . $second;
    echo $result;
    ?>

    <?php
    $string = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";

    $array = explode("\n", $string);

    echo "<pre>";
    var_dump($array);
    echo "</pre>";
    ?>


</body>

</html>
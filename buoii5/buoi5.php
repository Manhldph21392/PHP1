<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function customCount($x, $y = 2)
    {
        $sum = $x + $y;
        echo $sum . "<br>";
        return;
    }
    customCount(10, 20);
    customCount(10);
    // Có 3 cách để lấy giá trị bên ngoài hàm
    // Cách 1: Truyền qua tham số
    // Cách 2: Sử dụng cú pháp global   
    ?>
</body>

</html>
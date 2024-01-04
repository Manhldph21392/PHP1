<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // echo "Lưu Đức Mạnh";
    // echo "PH21392";



    $x = (2 == 3);
    $x = (2 != 3);
    $x = (2 <> 3);
    $x = (2 === 3);
    $x = (2 !== 3);

    $a = 10;
    $b = 9;
    ($a > 9  && $c =  $a + $b);
    echo "$c";
    $number;
    $name = "Lưu Đức Mạnh";
    $old = "20";
    $mssv = "PH21392";
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ tên</th>
                <th>MSSV</th>
                <th>Tuổi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php for ($i = 1; $i <= 1; $i++) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $mssv; ?></td>
                <td><?php echo $old; ?></td>
            </tr>
        <?php endfor; ?>
        </tr>
        </tbody>
    </table>

</body>

</html>
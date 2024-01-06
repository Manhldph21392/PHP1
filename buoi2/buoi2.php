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



    // $x = (2 == 3);
    // $x = (2 != 3);
    // $x = (2 <> 3);
    // $x = (2 === 3);
    // $x = (2 !== 3);

    // $a = 10;
    // $b = 9;
    // ($a > 9  && $c =  $a + $b);
    // echo "$c";
    // $number;
    // $name = "Lưu Đức Mạnh";
    // $old = "20";
    // $mssv = "PH21392";
    ?>
    <?php
    $data = [
        ['name' => 'Lưu Đức Mạnh', 'mssv' => 'PH21392', 'old' => '20'],
        ['name' => 'Nguyễn Văn A', 'mssv' => 'PH21393', 'old' => '21'],
        ['name' => 'Trần Thị B', 'mssv' => 'PH21394', 'old' => '19'],
    ];

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
        <?php foreach ($data as $index => $student) : ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['mssv']; ?></td>
                <td><?php echo $student['old']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>
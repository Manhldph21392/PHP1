<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-group {
            display: flex;
            justify-content: space-between;
            max-width: 300px;
            margin-bottom: 10px;
        }

        .box__form {
            display: flex;
            justify-content: center;
        }

        .form-group input,
        select {
            padding: 5px;
            width: 50%;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <?php
    include('connect-assignment.php');

    ?>
    <?php
    if (isset($_POST['submit'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $description = $_POST['description'];
        $category_id = $_POST['category_id'];
        $sql = "INSERT INTO toyproduct(ProductName, ProductPrice,Description,CategoryId ) VALUES ('$product_name', '$product_price', '$description', '$category_id')";
        $conn->exec($sql);
    }
    ?>


    <div class="box__form">
        <form action="assignment1.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="product_name" id="product_name">
            </div>
            <div class="form-group">
                <label for="">Product Price</label>
                <input type="text" name="product_price" id="product_price">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" name="description" id="description">
            </div>
            <div class="form-group">
                <label for="">CategoryId</label>
                <select name="category_id" id="category_id">
                    <?php
                    $queryMyshop =  "SELECT * FROM category";
                    $resuilt = $conn->query($queryMyshop);
                    $myShop = $resuilt->fetchAll();
                    foreach ($myShop as $item) {
                        echo "<option value = '{$item['CategoryId']}'>{$item['CategoryName']}</option>";
                    }
                    ?>
                </select>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </form>
    </div>

    <?php
    function sumProduct($n)
    {
        $sum = 0;
        if ($n > 0 && is_int($n)) {
            for ($i = 2; $i <= $n; $i += 2) {
                $sum += $i;
            }
        } else {
            echo "Vui long nhap so nguyen duong!";
        }
        return $sum;
    }
    $n = 10;
    $allSum = sumProduct($n);
    echo "Tổng của các số từ 1 đến n là: " . $allSum;
    ?>
    <?php

    $dsSinhVien = array(
        array("SV001", "Nguyen Van A", 8.5, 7.5),
        array("SV002", "Tran Thi B", 9.0, 8.0),
        array("SV003", "Le Van C", 7.5, 6.5),
        array("SV004", "Pham Thi D", 6.0, 7.0),
        array("SV005", "Hoang Van E", 8.0, 8.5)
    );

    // Hiển thị toàn bộ thông tin sinh viên


    // Hiển thị sinh viên có điểm trung bình lớn hơn 8
   
    ?>
    <table>
        <tr>
            <th>Mã SV</th>
            <th>Tên</th>
            <th>Điểm Trung Bình</th>
        </tr>
        <?php foreach ($dsSinhVien as $sinhVien) : ?>
            <tr>
                <td><?php echo $sinhVien[0]; ?></td>
                <td><?php echo $sinhVien[1]; ?></td>
                <td><?php echo number_format(($sinhVien[2] + $sinhVien[3]) / 2, 2); ?></td>
            </tr>
        <?php endforeach; ?>
        <table>
            <tr>
                <th>Mã SV</th>
                <th>Tên</th>
                <th>Điểm Trung Bình</th>
            </tr>
            <?php foreach ($dsSinhVien as $sinhVien) : ?>
                <?php
                $diemTB = ($sinhVien[2] + $sinhVien[3]) / 2;
                if ($diemTB > 8) :
                ?>
                    <tr>
                        <td><?php echo $sinhVien[0]; ?></td>
                        <td><?php echo $sinhVien[1]; ?></td>
                        <td><?php echo number_format($diemTB, 2); ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
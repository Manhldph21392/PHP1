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
    $errors = [];
    if (isset($_POST['submit'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $description = $_POST['description'];
        $category_id = $_POST['category_id'];
        if (isset($_FILES['image'])) {
            $src = "image/";
            $images = $_FILES['image']['name'];
            $tmp_image = $src . $images;
            move_uploaded_file($_FILES['image']['tmp_name'], $tmp_image);
        } else {
            $errors['image'] = "Bạn phải chọn hình ảnh cho sản phẩm";
        }
        if (empty($product_name)) {
            $errors['product_name'] = "Bạn phải nhập tên sản phẩm";
        }
        if (empty($product_price)) {
            $errors['product_price'] = "Bạn phải nhập giá sản phẩm";
        } elseif (!is_numeric($product_price)) {
            $errors['product_price'] = "Giá sản phẩm phải là số";
        } elseif ($product_price <= 0) {
            $errors['product_price'] = "Giá sản phẩm phải lớn hơn  0";
        }
        if (empty($description)) {
            $errors['description'] = "Bạn phải nhập mô tả cho sản phẩm";
        }
        if (empty($errors)) {
            $sql = "INSERT INTO toyproduct(ProductName, ProductPrice,Description,CategoryId,image ) VALUES ('$product_name', '$product_price', '$description', '$category_id', '$tmp_image')";
            $conn->exec($sql);
            header("Location: index.php");
        }
    }
    ?>


    <div class="box__form">
        <form action="assignment1.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" name="product_name" id="product_name">
                <br>
                <?php
                if (isset($errors['product_name'])) {
                    echo "<span style='color:red'>{$errors['product_name']}</span>";
                }
                ?>
            </div>
            <div class="form-group">
                <label for="">Product Price</label>
                <input type="text" name="product_price" id="product_price">

                <?php
                if (isset($errors['product_price'])) {
                    echo "<span style='color:red'>{$errors['product_price']}</span>";
                }
                ?>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" name="description" id="description">
                <?php
                if (isset($errors['description'])) {
                    echo "<span style='color:red'>{$errors['description']}</span>";
                }
                ?>
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" id="image">
                <?php
                if (isset($errors['image'])) {
                    echo "<span style='color:red'>{$errors['image']}</span>";
                }
                ?>
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
   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
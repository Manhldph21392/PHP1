<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-add {
            display: flex;
            flex-direction: column;
            max-width: 500px;
            margin: auto;
        }

        .form-add button {
            max-width: 100px;
        }

        .row-in-form {
            display: flex;
            max-width: 300px;
            margin: 5px 0px;
        }

        .row-in-form input {
            width: 50%;
            padding: 5px 3px;
        }

        .row-in-form select {
            width: 50%;
            padding: 5px 0px;
        }

        .row-in-form label {
            width: 50%;
        }
    </style>
</head>

<body>


    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST" ) {
            $productName = $_POST['product_name'];
            $image = $_POST['image'];
            $price = $_POST['price'];
            $category_Id = $_POST['category_id'];
            if(empty($productName)){
                $errors ['product_name'] = "Vui lòng nhập tên sản phẩm ";
            }
        }

    ?>
    <?php
    include('connect-test.php');
    ?>
    <form action="test.php" method="post" emptypr="multipart/fo" class="form-add">
        <div class="row-in-form">
            <label for="">Product Name</label>
            <input type="number" placeholder="" name="product_name" id="product_name">
        </div>
        <div class="row-in-form">
            <label for="">Image</label>
            <input type="file" name="image" id="image">
        </div>
        <div class="row-in-form">
            <label for="">Price</label>
            <input type="number" name="price" id="price">
        </div>
        <div class="row-in-form">
            <label for="">Category_id</label>
            <select name="category_id" id="category_id">
                <?php
                $queryCategory = "SELECT * FROM category";
                $result = $conn->query($queryCategory);
                $category = $result->fetchAll();
                foreach ($category as $item) {
                    echo "<option value = '{$item['category_Id']}'>{$item['category_Name']}</option>";
                }
                ?>
            </select>
        </div>


        <button type="submit">Submit</button>
    </form>

    <?php
    $myVar = 42;

    if (isset($myVar)) {
        echo '$myVar đã được định nghĩa và có giá trị.';
    } else {
        echo '$myVar không tồn tại hoặc có giá trị là null.';
    }
    ?>
</body>

</html>
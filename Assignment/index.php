<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        table {
            margin: auto;
        }

        tr,
        td {
            text-align: center;
            border: 1px solid;
        }

        .btn a {
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php
    include 'connect-assignment.php';


    $query = "SELECT toyproduct.*, a.CategoryName FROM toyproduct INNER JOIN category a ON toyproduct.CategoryId  = a.CategoryId ";

    $result = $conn->query($query);

    if ($result->rowCount() > 0) {
        echo "<table border='1'>
    <tr>
        <th>Product Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Description</th>
        <th>Category</th>
        <th>Actions</th>
    </tr>";

        $rows = $result->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row) {
            echo "<tr>
            <td>{$row['ProductName']}</td>
            <td><img src='./image/{$row['image']}' alt='image' width='50'></td>
            <td>{$row['ProductPrice']}</td>
            <td>{$row['Description']}</td>
            <td>{$row['CategoryName']}</td>
            <td>
            <a href='removeProduct.php?ProductId ={$row['ProductId']}'>Edit</a>
            <a href='removeProduct.php?ProductId ={$row['ProductId']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
        </td>
        </tr>";
        }

        echo "</table>";
    } else {
        echo "<table border='1'>
    <tr>
        <th>Product Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Description</th>
        <th>Category</th>
        <th>Actions</th>
    </tr>";
        echo "</table>";
        echo "No flights found";
    }

    echo "<button class = 'btn btn-primary'> <a href='assignment1.php'>Add New Product</a> </button>";

    echo "<button class = 'btn btn-danger'><a href='logout.php'>Logout</a></button>";
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
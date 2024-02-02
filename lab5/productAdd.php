<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        }

        .row-in-form label {
            width: 50%;
        }
    </style>
</head>

<body>
    <?php
    include('connect.php');
    ?>
    <?php
    if (isset($_POST['submit'])) {
        $flight_number = $_POST['flight_number'];
        $total_passengers = $_POST['total_passengers'];
        $description = $_POST['description'];
        $airline = $_POST['airline'];
        if (isset($_FILES['image'])) {
            $src = "image/";
            $images = $_FILES['image']['name'];
            $tmp_image = $src . $images;
            move_uploaded_file($_FILES['image']['tmp_name'], $tmp_image);
        }
        $sql = "INSERT INTO fights (flight_number,image, total_passengers, description, airline_id) VALUES('$flight_number', '$total_passengers', '$tmp_image', '$description', '$airline')";
        if ($conn->exec($sql)) {
            echo "Thêm dữ liệu thành công!";
            header("Location: index.php");
            exit(); 
        } else {
            echo "Lỗi khi thêm dữ liệu: " . $conn->errorInfo()[2];
        }
    }
    ?>
    <form action="addProduct.php" method="post" enctype="multipart/form-data" class="form-add">
        <div class="row-in-form">
            <label for="">Flight Number</label>
            <input type="number" placeholder="" name="flight_number" id="flight_number">
        </div>
        <div class="row-in-form">
            <label for="">Total Passengers</label>
            <input type="number" name="total_passengers" id="total_passengers">
        </div>
        <div class="row-in-form">
            <label for="">Image</label>
            <input type="file" name="image" id="image">
        </div>
        <div class="row-in-form">
            <label for="">Description</label>
            <input type="text" name="description" id="description">
        </div>
        <div class="row-in-form">
            <label for="">Air Line</label>
            <select name="airline" id="airline">
                <?php
                $queryAirline = "SELECT * FROM airlines";
                $result = $conn->query($queryAirline);
                $airlines = $result->fetchAll();
                foreach ($airlines as $item) {
                    echo "<option value = '{$item['airline_id']}'>{$item['airlines_name']}</option>";
                }
                ?>
            </select>
        </div>

        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
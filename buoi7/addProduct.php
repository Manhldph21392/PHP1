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
    include('conect.php');
    ?>
    <form action="addProduct.php" method="post" emptypr="multipart/fo" class="form-add">
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
                // Viết câu lệnh query để truy vấn dữ liệu
                $queryAirline = "SELECT * FROM airlines";
                // thực hiện query thông qua cổng kết nối $conn
                $result = $conn->query($queryAirline);
                $airlines = $result->fetchAll();
                foreach ($airlines as $item) {
                    echo "<option value = '{$item['airline_id']}'>{$item['airlines_name']}</option>";
                }
                ?>
            </select>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
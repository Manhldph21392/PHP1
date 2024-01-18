<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        table{
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
    include 'conect.php';


    $query = "SELECT fights.*, a.airlines_name FROM fights INNER JOIN airlines a ON fights.airline_id = a.airline_id";

    $result = $conn->query($query);

    if ($result->rowCount() > 0) {
        echo "<table border='1'>
    <tr>
        <th>Flight Number</th>
        <th>Image</th>
        <th>Total Passengers</th>
        <th>Description</th>
        <th>Airline</th>
        <th>Actions</th>
    </tr>";

        $rows = $result->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rows as $row) {
            echo "<tr>
            <td>{$row['flight_number']}</td>
            <td><img src='./image/{$row['image']}' alt='image' width='50'></td>
            <td>{$row['total_passengers']}</td>
            <td>{$row['description']}</td>
            <td>{$row['airlines_name']}</td>
            <td>
               <button class = 'btn btn-primary'> <a href='edit_flight.php?flight_id={$row['flight_id']}'>Edit</a></button>
                <button class = 'btn btn-danger'><a href='delete_flight.php?flight_id={$row['flight_id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a></button>
            </td>
        </tr>";
        }

        echo "</table>";
    } else {
        echo "<table border='1'>
    <tr>
        <th>Flight Number</th>
        <th>Image</th>
        <th>Total Passengers</th>
        <th>Description</th>
        <th>Airline</th>
        <th>Actions</th>
    </tr>";
        echo "</table>";
        echo "No flights found";
    }

    // Thêm mới chuyến bay
    echo "<button class = 'btn btn-primary'> <a href='addProduct.php'>Add New Flight</a> </button>";

    // Đăng xuất
    echo "<button class = 'btn btn-danger'><a href='logout.php'>Logout</a></button>";
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
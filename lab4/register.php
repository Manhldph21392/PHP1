<?php
require 'connect.php'; // Kết nối đến cơ sở dữ liệu

// Hàm để kiểm tra và xử lý dữ liệu đầu vào
function usedata($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = usedata($_POST['username']);
    $password = usedata($_POST['password']);

    // Validation: Kiểm tra xem tên đăng nhập có chứa ký tự hợp lệ hay không
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        echo "Tên đăng nhập chỉ được chứa chữ cái và số.";
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Đăng ký thành công!";
        } else {
            echo "Lỗi: " . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Trang Đăng Ký</title>
</head>
<body>
    <h2>Đăng Ký</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" name="username" required><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Đăng Ký">
    </form>
</body>
</html>

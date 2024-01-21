<?php
require 'connect.php.php'; // Kết nối đến cơ sở dữ liệu

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

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Đăng nhập thành công!";
        } else {
            echo "Sai mật khẩu!";
        }
    } else {
        echo "Tài khoản không tồn tại!";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Trang Đăng Nhập</title>
</head>
<body>
    <h2>Đăng Nhập</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" name="username" required><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Đăng Nhập">
    </form>
</body>
</html>

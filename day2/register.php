<?php
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'day2');

// Lấy thông tin từ biểu mẫu đăng ký
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$email = $_POST['email'];

// Kiểm tra mật khẩu và xác nhận mật khẩu có khớp nhau hay không
if ($password !== $confirm_password) {
    echo 'Mật khẩu không khớp';
    exit;
}

// kết nối dữ liệu từ bảng
$query = "SELECT * FROM login WHERE username='$username'";
$result = mysqli_query($conn, $query);
// Kiểm tra xem tên đăng nhập đã tồn tại trong cơ sở dữ liệu hay chưa
if (mysqli_num_rows($result) > 0) {
    echo 'Tên đăng nhập đã tồn tại';
    exit;
}

// Thêm người dùng mới vào cơ sở dữ liệu
$query = "INSERT INTO login (username, password, email) VALUES ('$username', '$password', '$email')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo 'Đăng ký thành công';
} else {
    echo 'Đăng ký thất bại';
}

// Đóng kết nối cơ sở dữ liệu
mysqli_close($conn);
?>

<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'day2');
// Check if the user is authenticated
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect the user to the login page
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h2>Xin chào , <?php echo $_SESSION['username']; ?>!

</h2>

<h2>Đây là mật khẩu của bạn , <?php

        echo $_SESSION['password'];

    ?>!

</h2>
<p>Bạn đã đăng nhập thành công .</p>
</body>
</html>

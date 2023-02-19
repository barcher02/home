<?php
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'day2');

// Lấy danh sách người dùng từ cơ sở dữ liệu
$query = "SELECT * FROM login";
$result = mysqli_query($conn, $query);

// Hiển thị danh sách người dùng

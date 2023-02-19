<?php
session_start();

// Retrieve username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password match a user in your database
//$query = 'select username from login where username="$username" and password="$password"';
$conn = mysqli_connect('localhost', 'root', '', 'day2');
$query = "select * from login where username='".$username."' and password='".$password."'";
$result = mysqli_query($conn, $query);
//var_dump ($result);
//$r = mysqli_fetch_assoc($result);
//var_dump($r);
if ($result->num_rows != 0) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header('Location: dashboard.php'); // Redirect the user to the dashboard
} else {
    echo 'Invalid username or password'; // Show an error message
}
?>

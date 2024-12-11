<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handling login
if (isset($_POST['username']) && isset($_POST['password'])) {
    $Username = $_POST['username'];
    $Password = $_POST['password'];

    $login_sql = "SELECT * FROM user WHERE username='$Username' AND password='$Password'";
    $login_result = mysqli_query($conn, $login_sql);

    if (mysqli_num_rows($login_result) > 0) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
<?php
$email = $_POST['email'];
$password = $_POST['password'];
$connect = mysqli_connect("localhost", "root", "root", "admin_db");
mysqli_query($connect, "INSERT INTO users (email, password) VALUES ('$email', '$password')");
$connect->close();
header('Location: ./../page_login.php');
exit();
?>
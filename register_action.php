<?php
include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

// echo $email;

$sql = "INSERT into users (name, email, password, phone)
VALUES('$name', '$email', '$password', '$phone')";
$insert = $conn->query($sql);

if ($insert == true) {
    $_SESSION['message'] = "Successfully Registered";
    header('location: index.php');
}
else {
    echo $conn->error;
}


?>
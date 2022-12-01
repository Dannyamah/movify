<?php

include 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

// to encrypt a password
// $password = sha1(md5($password));

$check = "SELECT * from users 
WHERE email = '$email' AND password ='$password' ";

$result = $conn->query($check);

// checking if the user exists
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $_SESSION['user'] = $user; 
    $_SESSION['message'] = "Login successful";
    echo "Login Successful";

    //redirecting the page
    header("location: index.php");
}
else {
    $_SESSION['message'] = "Invalid credentials";
    header("location: index.php");
}

?>
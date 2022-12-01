<?php

include 'connection.php';

// $user_id = $_POST['user_id'];
$movie_id = $_POST['movie_id'];

if (isset($_SESSION['user'])) {
    $user_id = $_SESSION['user']['id'];
}else{
    $_SESSION['message'] = 'Please log in';
    header("location: index.php");
}


$sql = "INSERT into bookings (user_id, movie_id, status)
VALUES ('$user_id', '$movie_id', 'open')";

$submit = $conn->query($sql);

if ($submit == true) {
    $_SESSION['message'] = 'Booking Successful';
    header("location: index.php");
} else {
    echo $conn->error;
}




?>
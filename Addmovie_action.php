<?php

include 'connection.php';

$title = $_POST['title'];
$description = $_POST['description'];
$rating = $_POST['rating'];

// echo $title;

$movie_review = "INSERT into movies (title, description, rating)
VALUES('$title', '$description', '$rating')";
$send = $conn->query($movie_review);


if ($send == true) {
    echo 'Movie Added Successfully';
    $_SESSION['message'] = "Movie Added successfully";
    // redirecting to index page
header("location: index.php");  
}
else {
    echo $conn->error;
}




?>
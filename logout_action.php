<?php

include 'connection.php';

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}
header("location: index.php");
?>
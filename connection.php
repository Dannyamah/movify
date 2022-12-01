<?php
    session_start();
// using localserver, hostname is localhost, username is root, password is an empty string, and then your database name; 
$conn = new mysqli('localhost', 'root', '', 'cypher_test');

// $sql = 'SELECT * from users';
// $get_users = $conn->query($sql);

// fetch_assoc converts mysql result into an associative array

// while ($user = $get_users->fetch_assoc() ) {
//     echo $user['name'] . '<br>';
// }

?>
<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'study_practice');

    if (!$connection) {
        //     echo "conected!";
        // } else {
        //     echo "Not conected!" . mysqli_error($connection);

        die("Not conected!" . mysqli_error());
    }
}

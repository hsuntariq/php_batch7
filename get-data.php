<?php

    // connect to the database
    $connection = mysqli_connect("localhost","root","","school") or die('connection failed');
    // get the values from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    // insert the data
    $insert = "INSERT INTO student (name,email,age) VALUES ('{$name}','{$email}',$age)";
    // execute the query
    mysqli_query($connection,$insert);

    header("Location: http://localhost/php2/show-data.php");

?>
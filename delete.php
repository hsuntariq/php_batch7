<?php
    // establish connection
    $connection = mysqli_connect("localhost","root","","school") or die('connection failed');
    // get the if from the url bar
    $id = $_GET['id'];

    // write the query
    $del = "DELETE FROM student WHERE id = $id";
    // execute the query
    mysqli_query($connection,$del);
    
    header("Location: http://localhost/php2/show-data.php");

?>
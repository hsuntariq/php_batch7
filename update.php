<?php
    $conn = mysqli_connect("localhost","root","","school");
    $id = $_POST['i'];
    $name = $_POST['n'];
    $email = $_POST['e'];
    $age = $_POST['a'];
    
    // update query
    $update = "UPDATE student SET name = '{$name}', email = '{$email}', age = $age WHERE id = $id" ;
    // execute
    mysqli_query($conn,$update);
    header("Location: http://localhost/php2/show-data.php");
?>
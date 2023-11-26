<?php
    session_start();
    include './config.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $insert = "INSERT INTO users (username,email,address,phone,password) VALUES ('{$username}','{$email}','{$address}','{$phone}','{$password}')";

    $result = mysqli_query($connection,$insert);
    if($result){
        $_SESSION['name'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['success'] = 'Welcome ' . $username;
        header("Location: http://localhost/php2/index.php");

    }else{
        header("Location: http://localhost/php2/register.php");
    }

?>
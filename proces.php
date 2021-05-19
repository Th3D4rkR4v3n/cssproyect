<?php
session_start(); 
require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])){ 

    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if(count($results) > 0 && password_verify($_POST['password'], $results['password'])){
        $_SESSION['user_id'] = $results['id'];
        header('Location:home.php');
        $mail = $_SESSION['user_email'] = $_POST['email'];
    }else{
        header('Location: error-login.php');
    }
} 



?>


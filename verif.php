<?php

session_start();


if(isset($_POST['login']) && isset($_POST['psw'])) {
    
    $login = $_POST['login'];
    $password = $_POST['psw'];
    
    
    $valid_login = "Mwa";
    $valid_password = "patalo";

    if($login === $valid_login && $password === $valid_password) {
        
        $_SESSION['login'] = $login;
        
        
        header("Location: home.php");
        exit();
    } else {

        $_SESSION['error'] = "Login incorrect";
        header("Location: login.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
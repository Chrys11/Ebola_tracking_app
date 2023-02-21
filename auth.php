<?php
session_start();

if(isset($_POST['login_btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == 'admin@edv.com'){
        if($password=='admin'){
            $_SESSION['user'] = $email;
            header('location:home.php');
        }
        else{
            $_SESSION['lg_error'] = 'Wrong password entered!';
            header('location:login.php');
        }
    }
    else{
        $_SESSION['lg_error'] = 'Unknown email entered!';
        header('location:login.php');
    }
}
else{
    header('location:login.php');
}

?>
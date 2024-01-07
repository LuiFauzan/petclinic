<?php
session_start();
if(isset($_POST['login'])){
    include "connection_220082.php";

    $query = "SELECT * FROM user_220082 WHERE username_220082='$_POST[username_220082]'";
    $login = mysqli_query($db_connection, $query);
    if(mysqli_num_rows($login) > 0){
        $user = mysqli_fetch_assoc($login);
        if(password_verify($_POST['password_220082'],$user['password_220082'])){
            $_SESSION['login'] = TRUE;
            $_SESSION['userid'] = $user['userid_220082'];
            $_SESSION['username'] = $user['username_220082'];
            $_SESSION['password'] = $user['password_220082'];
            $_SESSION['usertype'] = $user['usertype_220082'];
            $_SESSION['fullname'] = $user['fullname_220082'];
            $_SESSION['photo'] = $user['photo_220082'];
            
            echo "<script>alert('Login Succes !'); window.location.replace('index.php')</script>;";
        }else{
            echo "<script>alert('Login Failed !'); window.location.replace('form_login_220082.php');</script>";
        }
    }else{
        echo "<script>alert('Login Failed, Users not found !'); window.location.replace('form_login_220082.php');</script>";
    }
}
?>
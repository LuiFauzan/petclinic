<?php
session_start();
if(isset($_POST['change'])){
    include "connection_220082.php";
    $password = password_hash($_POST['new_password_220082'], PASSWORD_DEFAULT);
    $query = "UPDATE user_220082 SET password_220082 = '$password' WHERE  userid_220082='$_SESSION[userid]'";
    $update = mysqli_query($db_connection, $query);
    if($update){
        $_SESSION['password'] = $password;
        echo "<script>alert ('Change password successed !');window.location.replace('index.php');</script>";
    }else{
        echo "<script>alert ('Change password failed !');window.location.replace('change_password_220082.php');</script>";
    }
}
?>

<?php
if(isset($_GET['id'])){
    include "connection_220082.php";
    $password = password_hash($_GET['type'], PASSWORD_DEFAULT);
    $query = "UPDATE user_220082 SET password_220082='$password' WHERE userid_220082='$_GET[id]'";
    $update = mysqli_query($db_connection, $query);
    if($update){
        echo "<script>alert('Reset password successed !');</script>";
    }else{
        echo "<script>alert('Reset password failed !');</script>";
    }
}
?>
<script>window.location.replace("read_user_220082.php");</script>
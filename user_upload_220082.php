<?php
session_start();
if(isset($_POST['upload'])){
    include "connection_220082.php";

    $folder = 'uploads/users/';
    if(move_uploaded_file($_FILES['new_photo_220082']['tmp_name'],$folder . $_FILES['new_photo_220082']['name'])){
        $photo = $_FILES['new_photo_220082']['name'];
        $query = "UPDATE user_220082 SET photo_220082 = '$photo' WHERE userid_220082 = '$_SESSION[userid]'";
        $upload = mysqli_query($db_connection, $query);
        if($upload){
            $_SESSION['photo'] = $photo;
            if($_POST['photo_220082'] !== 'default.png') unlink($folder . $_POST['photo_220082']);
            echo "<script>alert('Change Photo Successed !'); window.location.replace('index.php')</script>";
        }else{
            echo "<script>alert('Change Photo Failed !'); window.location.replace('user_photo_220082.php?id=$_POST[userid_220082]');</script>";
        }
    }else{
        echo "<script>alert('Upload Photo Failed !'); window.location.replace('user_photo_220082.php?id=$_POST[userid_220082]');</script>";
    }
}
?>
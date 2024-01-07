<?php
if(isset($_POST['upload'])){
    include "connection_220082.php";

    $folder = 'uploads/doctors/';
    if(move_uploaded_file($_FILES['new_photo_220082']['tmp_name'],$folder . $_FILES['new_photo_220082']['name'])){
        $photo = $_FILES['new_photo_220082']['name'];
        $query = "UPDATE doctor_220082 SET doctor_photo_220082 = '$photo' WHERE doctor_id_220082 = '$_POST[doctor_id_220082]'";
        $upload = mysqli_query($db_connection, $query);
        if($upload){
            if($_POST['doctor_photo_220082'] !== 'default.png') unlink($folder . $_POST['doctor_photo_220082']);
            echo "<script>alert('Change Photo Successed !'); window.location.replace('read_doctor_220082.php')</script>";
        }else{
            echo "<script>alert('Change Photo Failed !'); window.location.replace('doctor_photo_220082.php?id=$_POST[userid_220082]');</script>";
        }
    }else{
        echo "<script>alert('Upload Photo Failed !'); window.location.replace('doctor_photo_220082.php?id=$_POST[userid_220082]');</script>";
    }
}
?>
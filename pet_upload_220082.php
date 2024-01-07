<?php
if(isset($_POST['upload'])){
    include "connection_220082.php";

    $folder = 'uploads/pets/';
    if(move_uploaded_file($_FILES['new_photo_220082']['tmp_name'],$folder . $_FILES['new_photo_220082']['name'])){
        $photo = $_FILES['new_photo_220082']['name'];
        $query = "UPDATE pet_220082 SET pet_photo_220082 = '$photo' WHERE pet_id_220082 = '$_POST[pet_id_220082]'";
        $upload = mysqli_query($db_connection, $query);
        if($upload){
            if($_POST['pet_photo_220082'] !== 'default.png') unlink($folder . $_POST['pet_photo_220082']);
            echo "<script>alert('Change Photo Successed !'); window.location.replace('read_pet_220082.php')</script>";
        }else{
            echo "<script>alert('Change Photo Failed !'); window.location.replace('pet_photo_220082.php?id=$_POST[pet_id_220082]');</script>";
        }
    }else{
        echo "<script>alert('Upload Photo Failed !'); window.location.replace('pet_photo_220082.php?id=$_POST[pet_id_220082]');</script>";
    }
}
?>
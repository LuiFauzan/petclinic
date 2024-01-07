<?php
if (isset($_POST['save'])) { // check variable POST from form
    include "connection_220082.php"; //call conncection php mysql

    $folder = 'uploads/doctors/';
    if(move_uploaded_file($_FILES['new_photo_220082']['tmp_name'], $folder . $_FILES['new_photo_220082']['name'])) {

        // success upload, get the photo name
        $photo=$_FILES['new_photo_220082']['name'];
    } else {
        $photo= $_POST['doctor_photo_220082'];
    }
        //sql query UPDATE SET WHERE 
        $query = "UPDATE doctor_220082 SET
        doctor_name_220082 = '$_POST[doctor_name_220082]',
        doctor_gender_220082 = '$_POST[doctor_gender_220082]',
        doctor_address_220082 = '$_POST[doctor_address_220082]',
        doctor_phone_220082 = '$_POST[doctor_phone_220082]',
        doctor_photo_220082 = '$photo'
        WHERE doctor_id_220082 = '$_POST[doctor_id_220082]'
        ";

        // run query
        $update= mysqli_query($db_connection, $query);

        if($update) { // check if query TRUE/succes
           if($photo !== $_POST['doctor_photo_220082'] && $_POST['doctor_photo_220082'] !== 'default.png') unlink($folder . $_POST['doctor_photo_220082']); // delete old photo
            // echo "<p>Pet update successfully !</p>"; // versi html
            echo "<script> alert ('doctor update successfully !'); </script>"; // versi javascript
        }  else {
            //echo "<p>pet update failed !</p>"; //versi html
            echo "<script> alert ('doctor update failed!'); </script>"; // versi javascript
        }


} 
?>
<!-- <p><a href="read_pet_220052.php">BACK TO PETS LIST</p> -->
<script>window.location.replace("read_doctor_220082.php"); </script>
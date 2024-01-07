<?php
if(isset($_POST['save'])) { // Check variable POST from FROM
   include "connection_220082.php"; //call connection php mysql

// sql query UPDATE SET WHERE
$query = "UPDATE pet_220082 SET 
pet_name_220082 = '$_POST[pet_name_220082]',
pet_type_220082 = '$_POST[pet_type_220082]',
pet_gender_220082 = '$_POST[pet_gender_220082]',
pet_age_220082 = '$_POST[pet_age_220082]',
pet_food_220082 = '$_POST[pet_food_220082]',
pet_owner_220082 = '$_POST[pet_owner_220082]',
pet_address_220082 = '$_POST[pet_address_220082]',
pet_phone_220082 = '$_POST[pet_phone_220082]' 
WHERE pet_id_220082 = '$_POST[pet_id_220082]';";

//run query
$update = mysqli_query($db_connection, $query);

if($update) { // check if query TRUE/success
    //echo "<p>PET updated succesfully !</p>"; // success msg (html version)
    echo "<script> alert('Pet updated successfully !'); </script>"; //success
} else {
    //echo "<p> PET update failed !</p>"; // fail msg (html version)
    echo "<script> alert(Pet update failed !); </script>"; // fail msg (javascript version)
  }
}
 ?>
<!-- <p><a href="read_pet_220048.php">BACK TO PETS LIST</a></p> -->
<script>window.location.replace("read_pet_220082.php");</script>
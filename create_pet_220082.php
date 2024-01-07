<?php
//  echo $_POST['pet_name_220082']. "<br>";
//  echo $_POST['pet_type_220082']. "<br>";
//  echo $_POST['pet_gender_220082']. "<br>";
//  echo $_POST['pet_age_220082']. "<br>";
//  echo $_POST['pet_owner_220082']. "<br>";
//  echo $_POST['pet_address_220082']. "<br>";
//  echo $_POST['pet_phone_220082']. "<br>";

if (isset($_POST['save'])) {
    include "connection_220082.php";



$query = "INSERT INTO pet_220082 (pet_name_220082, pet_type_220082, pet_gender_220082, pet_age_220082, pet_food_220082, pet_owner_220082, pet_address_220082, pet_phone_220082) VALUES ('$_POST[pet_name_220082]','$_POST[pet_type_220082]','$_POST[pet_gender_220082]','$_POST[pet_age_220082]','$_POST[pet_food_220082]','$_POST[pet_owner_220082]','$_POST[pet_address_220082]','$_POST[pet_phone_220082]')";


$create = mysqli_query($db_connection ,$query);

if ($create) {
    // echo "<p>Pet added succesfully !</p>";
    echo "<script> alert('Pet added succesfuly !'); </script>";
}
else{
    // echo "<p>Pet add failed !</p>";
echo "<script> alert('pet add failed!'); </script>";
}
}

?>
<!-- <p><a href="read_pet_220082.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_pet_220082.php");
</script>
 ?>

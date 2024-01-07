<?php
// echo $_POST['doctor_name_220082']. "<br>";
// echo $_POST['doctor_gender_220082']. "<br>";
// echo $_POST['doctor_address_220082']. "<br>";
// echo $_POST['doctor_phone_220082']. "<br>";
if (isset($_POST['save'])) {
    include "connection_220082.php";



$query = "INSERT INTO doctor_220082 (doctor_name_220082,doctor_gender_220082, doctor_address_220082, doctor_phone_220082) VALUES ('$_POST[doctor_name_220082]','$_POST[doctor_gender_220082]','$_POST[doctor_address_220082]','$_POST[doctor_phone_220082]')";
$create = mysqli_query($db_connection ,$query);

if ($create) {
    // echo "<p>doctor added succesfully !</p>";
    echo "<script> alert('doctor added succesfuly !'); </script>";
}
else{
    // echo "<p>doctor add failed !</p>";
    echo "<script> alert('doctor add failed!'); </script>";
}
}

?>
<!-- <p><a href="read_doctor_220088.php">BACK TO doctorS LIST</a></p> -->
<script>
window.location.replace("read_doctor_220082.php");
</script>
?>
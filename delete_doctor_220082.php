<?php
// echo $_POST['doctor_name_220082']. "<br>";
// echo $_POST['doctor_gender_220082']. "<br>";
// echo $_POST['doctor_address_220082']. "<br>";
// echo $_POST['doctor_phone_220082']. "<br>";
if (isset($_GET['id'])) {
    include "connection_220082.php";



$query = "DELETE FROM doctor_220082
WHERE doctor_id_220082 = '$_GET[id]'";
$update = mysqli_query($db_connection ,$query);

if ($update) {
    // echo "<p>doctor  DELETED succesfully !</p>";
    echo "<script> alert('doctor DELETED succesfuly !'); </script>";
}
else{
    // echo "<p>docto DELETED failed !</p>";
    echo "<script> alert('doctor DELETE failed!'); </script>";
}
}

?>
<!-- <p><a href="read_doctor_220088.php">BACK TO doctorS LIST</a></p> -->
<script>
window.location.replace("read_doctor_220082.php");
</script>
?>
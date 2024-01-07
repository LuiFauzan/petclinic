<?php
//echo $_POST['pet_name_220081'] . "<br>";
//echo $_POST['pet_type_220081'] . "<br>";
//echo $_POST['pet_gender_220081'] . "<br>";
//echo $_POST['pet_age_220081'] . "<br>";
//echo $_POST['pet_owner_220081'] . "<br>";
//echo $_POST['pet_address_220081'] . "<br>";
//echo $_POST['pet_phone_220081'] . "<br>";

if (isset($_GET['id'])) { // check variable GET from URL
    try {
        include "connection_220082.php"; // call connection PHP MySQL

    // SQL query DELETE FROM WHERE
    $query = "DELETE FROM pet_220082 WHERE pet_id_220082 = '$_GET[id]';";
    // if (mysqli_errno($query)) {
    //     echo "<script> alert('Pet deleted failed!'); window.location.replace('read_pet_220081.php');</script>";
    // }

    // Run query
    $delete = mysqli_query($db_connection, $query);

    if ($delete) { // check if query TRUE/success
        // echo "<p>Pet deleted successfully!</p>"; // HTML version
        echo "<script> alert('Pet deleted successfully!'); </script>"; // JavaScript version
    } else {
        //echo "<p>Pet delete failed!</p>"; // HTML version
        echo "<script> alert('Pet delete failed!'); </script>"; // JavaScript version
    }
} catch(Exception $e){
    // Menangkap dan menangani pengecualian
    echo "<script> alert('Pet delete failed!'); window.location.replace('read_pet_220082.php');</script>"; // JavaScript version
}
    }
    
?>
<script>window.location.replace("read_pet_220082.php");</script>

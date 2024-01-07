<?php
    if (isset($_POST['save'])){
        include "connection_220082.php";

        $query = "INSERT INTO medicals_220082 SET
        pet_id_220082 = '$_POST[pet_id_220082]',
        doctor_id_220082 = '$_POST[doctor_id_220082]',
        symptom_220082 = '$_POST[symptom_220082]',
        diagnose_220082 = '$_POST[diagnose_220082]',
        treatment_220082 = '$_POST[treatment_220082]',
        cost_220082 = '$_POST[cost_220082]';";

        $create = mysqli_query($db_connection, $query);

        if($create){
            echo "<script>alert ('Medical Updated Susccesfuly !')</script>";
        }else{
            echo "<script>alert ('Medical Updated Failed !')</script>";
        }
    }
?>
<script>window.location.replace("medicals_220082.php?pet_id=<?=$_POST['pet_id_220082'];?>")</script>
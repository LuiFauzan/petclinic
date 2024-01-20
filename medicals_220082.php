<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !'); window.location.replace('form_login_220082.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetLuy</title>
    <link rel="stylesheet" href="style/table.css">
    <?php
    include "utility/main.php";
    ?>
</head>

<body>
    <div class="header">
        <p><a href="add_medical_220082.php?pet_id=<?= $_GET['pet_id']; ?>">Add New Record</a></p>
        <h1>PetLuy Website</h1>
        <p><a href="read_pet_220082.php">Back to Pets List</a>
        </p>
    </div>
    <div class="header1">

        <h3>Medical Records</h3>

        <?php
        include "connection_220082.php";
        //make query SELECT FROM WHERE
        $querypet = "SELECT * FROM pet_220082 WHERE pet_id_220082='$_GET[pet_id]'";
        //RUN QUERY
        $pet = mysqli_query($db_connection, $querypet);
        // extract data from query result
        $data1 = mysqli_fetch_assoc($pet);

        // Query one table
        // $querymed = "SELECT * FROM medicals_220082 WHERE pet_id_220082='$_GET[pet_id]'";
        $querymed = "SELECT * FROM medicals_220082 AS m, doctor_220082 AS d WHERE m.pet_id_220082='$_GET[pet_id]' AND m.doctor_id_220082 = d.doctor_id_220082";
        $medicals = mysqli_query($db_connection, $querymed);
        ?>
        <table class="medical">
            <tr>
                <td>Pet Id/Name</td>
                <td>: <?= $data1['pet_id_220082'] ?> / <?= $data1['pet_name_220082'] ?></td>
            </tr>
            <tr>
                <td>Pet Type/Gender/Age</td>
                <td>: <?= $data1['pet_type_220082'] ?> / <?= $data1['pet_gender_220082'] ?> / <?= $data1['pet_age_220082'] ?></td>
            </tr>
            <tr>
                <td>Owner</td>
                <td>: <?= $data1['pet_owner_220082'] ?> / <?= $data1['pet_address_220082'] ?> / <?= $data1['pet_phone_220082'] ?></td>
            </tr>
        </table>
    </div>
    <form action="">
        <table border="1">
            <thead>

                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Doctor</th>
                    <th>Symptom</th>
                    <th>Diagnose</th>
                    <th>Treatment</th>
                    <th>Cost ($)</th>
                </tr>
            </thead>
            <!-- loop if the data not empty -->
            <?php

            if (mysqli_num_rows($medicals) > 0) {
                $i = 1;
                foreach ($medicals as $data2) :

            ?>
                    <tbody>

                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= date('y-m-d H : i : s', strtotime($data2['mr_date_220082'])) ?></td>
                            <td><?= $data2['doctor_name_220082'] ?></td>
                            <td><?= $data2['symptom_220082'] ?></td>
                            <td><?= $data2['diagnose_220082'] ?></td>
                            <td><?= $data2['treatment_220082'] ?></td>
                            <td><?= $data2['cost_220082'] ?></td>
                        </tr>
                    </tbody>
                <?php
                endforeach;
            } else {
                ?>
                <!-- will show if the data empty -->
                <tr>
                    <td colspan="7" align='center'>No record !</td>
                </tr>
            <?php
            }
            ?>
        </table>

    </form>
</body>

</html>
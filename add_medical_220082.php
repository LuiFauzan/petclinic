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
    <link rel="stylesheet" href="style/add.css">
    <?php
    include "utility/main.php";
    ?>

</head>

<body>
    <?php
    include "connection_220082.php";
    //make query SELECT FROM WHERE

    $querypet = "SELECT * FROM pet_220082 WHERE pet_id_220082 = '$_GET[pet_id]'";
    //RUN QUERY
    $pet = mysqli_query($db_connection, $querypet);
    // extract data from query result
    $data1 = mysqli_fetch_assoc($pet);
    $querydoc = "SELECT * FROM doctor_220082 ";
    $doctor = mysqli_query($db_connection, $querydoc)
    ?>
    <div class="header">
        <p><a href="index.php"> Home </a></p>
        <h1>PetLuy Website</h1>
        <p><a href="medicals_220082.php?pet_id=<?= $data1['pet_id_220082'] ?>"> Cancel </a></p>
    </div>
    <div class="header1">
        <h3>Form Add Medical</h3>

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

    <form method="post" action="create_medical_220082.php">
        <table>
            <tr>
                <td>Doctor</td>
                <td>
                    <select name="doctor_id_220082" required>
                        <option value="">Choose</option>
                        <?php foreach ($doctor as $data2) : ?>
                            <option value="<?= $data2['doctor_id_220082'] ?>"><?= $data2['doctor_name_220082'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Symptom</td>
                <td><textarea name="symptom_220082" required></textarea></td>
            </tr>
            <tr>
                <td>Diagnose</td>
                <td><textarea name="diagnose_220082" required></textarea></td>
            </tr>
            <tr>
                <td>Ttreatment</td>
                <td><textarea name="treatment_220082" required></textarea></td>
            </tr>
            <tr>
                <td>Cost ($)</td>
                <td><input type="number" name="cost_220082" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input class="btn" type="submit" name="save" value="SAVE">
                    <input class="btn" type="submit" name="reset" value="RESET">
                    <input type="hidden" name="pet_id_220082" value="<?= $data1['pet_id_220082'] ?>">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
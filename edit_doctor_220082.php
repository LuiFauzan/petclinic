<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please login first !');window.location.replace('form_login_220052.php')</script>";
}
if ($_SESSION['usertype'] != 'Manager') {
    echo "<script>alert('Access Forbidden !');window.location.replace('index.php')</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Petluy</title>
    <link rel="stylesheet" href="style/add.css">
    <?php
    include "utility/main.php";
    ?>
</head>

<body>
    <div class="header">
        <p><a href="index.php">Index</a></p>
        <h1>Doctor Clinic</h1>
        <p><a href="read_doctor_220082.php">Cancel</a></p>
    </div>
    <div class="header1">
        <h3>Edit Doctor</h3>
    </div>
    <?php
    //call connection
    include "connection_220082.php";

    //make query SELECT FROM WHERE
    $query = "SELECT * FROM doctor_220082 WHERE doctor_id_220082='$_GET[id]'";


    //run query
    $doctor = mysqli_query($db_connection, $query);

    //extract data from query result
    $data = mysqli_fetch_assoc($doctor);
    ?>
    <form method="post" action="update_doctor_220082.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="doctor_name_220082" value="<?= $data['doctor_name_220082'] ?>" required /></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="doctor_gender_220082" value="Male" <?= ($data['doctor_gender_220082'] == 'Male') ? 'checked' : ''; ?> required> Male
                    <input type="radio" name="doctor_gender_220082" value="Female" <?= ($data['doctor_gender_220082'] == 'Female') ? 'checked' : ''; ?> required> Female
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="doctor_address_220082" required><?= $data['doctor_address_220082'] ?></textarea></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="doctor_phone_220082" value="<?= $data['doctor_phone_220082'] ?>" required></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td>
                    <img src="uploads/doctors/<?= $data['doctor_photo_220082'] ?>" width="100" height="100">
                </td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="file" name="new_photo_220082" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="hidden" name="doctor_photo_220082" value="<?= $data['doctor_photo_220082'] ?>" />
                    <input type="hidden" name="doctor_id_220082" value="<?= $data['doctor_id_220082'] ?>" />
                    <input class="btn" type="submit" name="save" value="SAVE" />
                    <input class="btn" type="reset" name="reset" value="RESET" />
            </tr>
        </table>
    </form>

</body>

</html>
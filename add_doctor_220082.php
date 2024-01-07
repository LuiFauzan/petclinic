<?php
session_start();
if(!isset($_SESSION['login'])){
    echo "<script>alert('Please Login First !'); window.location.replace('form_login_220082.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DoctorLuy || Website</title>
</head>
<body>
    <h1>DoctorLuy</h1><hr>
    <h3>Form Add Doctor</h3>
    <form method="post" action="create_doctor_220082.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="doctor_name_220082"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="doctor_gender_220082" value="Male" required> Male |
                    <input type="radio" name="doctor_gender_220082" value="Female" required> Female
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="doctor_address_220082" required></textarea></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="doctor_phone_220082" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save" value="SAVE">
                <input type="reset" name="reset" value="RESET">
            </td>
            </tr>
            <table>
    </form>
    <p><a href="read_doctor_220082.php">CANCEL</a></p>
</body>
</html>
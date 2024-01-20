<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !'); window.location.replace('form_login_220082.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PetLuy || Website</title>
    <link rel="stylesheet" href="style/add.css">
    <?php
    include "utility/main.php";
    ?>
</head>

<body>
    <div class="header">
        <p><a href="index.php">Home</a></p>
        <h1>PetLuy</h1>
        <p><a href="read_pet_220082.php">Cancel</a></p>
    </div>
    <div class="header1">
        <h3>Add Your Pet</h3>
    </div>
    <form method="post" action="create_pet_220082.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="pet_name_220082"></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="pet_type_220082"> required>
                        <option value="">Choose</option>
                        <option value="Cat">Cat</option>
                        <option value="Dog">Dog</option>
                        <option value="Reptil">Reptil</option>
                        <option value="Bird">Bird</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="pet_gender_220082" value="Male" required> Male |
                    <input type="radio" name="pet_gender_220082" value="Female" required> Female
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="pet_age_220082" required></td>
            </tr>
            <tr>
                <td>food</td>
                <td>
                    <input type="radio" name="pet_food_220082" value="Wet" required>Wet ||
                    <input type="radio" name="pet_food_220082" value="Dry" required>Dry
                </td>
            </tr>
            <tr>
                <td>Owner</td>
                <td><input type="text" name="pet_owner_220082" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="pet_address_220082" required></textarea></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="pet_phone_220082" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn" type="submit" name="save" value="SAVE">
                    <input class="btn" type="reset" name="reset" value="RESET">
                </td>
            </tr>
            <table>
    </form>
</body>

</html>
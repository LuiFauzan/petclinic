<?php
session_start();
if(!isset($_SESSION['login'])){
    echo "<script>alert('Please Login First !'); window.location.replace('form_login_220082.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PetLuy || Website</title>
</head>
<body>
    <h1>PetLuy</h1><hr>
    <h3>Form Edit Pet</h3>
    <?php
    //call connection mysql
    include "connection_220082.php";
    //make query SELECT FROM WHERE
    $query = "SELECT * FROM pet_220082 WHERE pet_id_220082='$_GET[id]'";
    //RUN QUERY
    $pet=mysqli_query($db_connection, $query);
    // extract data from query result
    $data=mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="update_pet_220082.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="pet_name_220082" value="<?=$data['pet_name_220082']?>" required></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="pet_type_220082"  required> 
                        <option value="">Choose</option>
                        <option value="Cat" <?=($data['pet_type_220082'] == 'Cat')?'selected':''?>>Cat</option>
                        <option value="Dog" <?=($data['pet_type_220082'] == 'Dog')?'selected':''?>>Dog</option>
                        <option value="Reptil" <?=($data['pet_type_220082'] == 'Reptil')?'selected':''?>>Reptil</option>
                        <option value="Bird" <?=($data['pet_type_220082'] == 'Bird')?'selected':''?>>Bird</option>
                    </select>
                    </td>

            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="pet_gender_220082" value="Male" <?=($data['pet_gender_220082'] == 'Male')?'checked':''?> required> Male 
                    <input type="radio" name="pet_gender_220082" value="Female" <?=($data['pet_gender_220082'] == 'Female')?'checked':''?> required> Female 
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="pet_age_220082" value="<?=$data['pet_age_220082']?>" required></td>
            </tr>
            <tr>
                <td>food</td>
                <td>
                <input type="radio" name="pet_food_220082" value="Wet" <?=($data['pet_food_220082'] == 'Wet')?'checked':''?> >Wet ||
                <input type="radio" name="pet_food_220082" value="Dry" <?=($data['pet_food_220082'] == 'Dry')?'checked':''?> >Dry
                </td>
            </tr>
            <tr>
                <td>Owner</td>
                <td><input type="text" name="pet_owner_220082" value="<?=$data['pet_owner_220082']?>" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="pet_address_220082" required><?=$data['pet_address_220082']?></textarea></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="pet_phone_220082" value="<?=$data['pet_phone_220082']?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="submit" name="save" value="SAVE">
                <input type="reset" name="reset" value="RESET">
                <input type="hidden" name="pet_id_220082" value="<?=$data['pet_id_220082']?>">
            </td>
            </tr>
            <table>
    </form>
    <p><a href="read_pet_220082.php">CANCEL</a></p>
</body>
</html>
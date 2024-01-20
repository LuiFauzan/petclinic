<!DOCTYPE html>
<html lang="en">

<head>
    <title>Petluy || Website</title>
    <link rel="stylesheet" href="style/table.css">
    <link rel="stylesheet" href="style/add.css">
    <?php
    include "utility/main.php";
    ?>
</head>

<body>
    <div class="header">
        <p><a href="index.php">Home</a></p>
        <h1>Petluy</h1>
        <a href="read_pet_220082.php">Cancel</a>
    </div>
    <div class="header1">

        <h3>Change Photo</h3>
    </div>
    <?php
    include "connection_220082.php";
    $query = "SELECT * FROM pet_220082 WHERE pet_id_220082='$_GET[id]'";
    $pet = mysqli_query($db_connection, $query);
    $data = mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="pet_upload_220082.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <img src="uploads/pets/<?= $data['pet_photo_220082']; ?>" alt="" width="100" height="100">
                </td>
            </tr>
            <tr>
                <td>New Photo</td>
                <td>: <input type="file" name="new_photo_220082" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input class="btn" type="submit" name="upload" value="UPLOAD">
                    <input type="hidden" name="pet_photo_220082" value="<?= $data['pet_photo_220082'] ?>">
                    <input type="hidden" name="pet_id_220082" value="<?= $data['pet_id_220082'] ?>">
                </td>
            </tr>
            <table>
    </form>
</body>

</html>
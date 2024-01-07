
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Petluy || Website</title>
</head>
<body>
    <h1>Petluy</h1><hr>
    <h3>Change Doctor Photo</h3>
    <?php
    include "connection_220082.php";
    $query = "SELECT * FROM doctor_220082 WHERE doctor_id_220082='$_GET[id]'";
    $doctor = mysqli_query($db_connection, $query);
    $data = mysqli_fetch_assoc($doctor);
    ?>
    <form method="post" action="doctor_upload_220082.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                <img src="uploads/doctors/<?=$data['doctor_photo_220082'];?>" alt="" width="100" height="100">
                </td>
            </tr>
            <tr>
                <td>New Photo</td>
                <td> <input type="file" name="new_photo_220082" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="upload" value="UPLOAD">
                    <input type="hidden" name="doctor_photo_220082" value="<?= $data['doctor_photo_220082']?>">
                    <input type="hidden" name="doctor_id_220082" value="<?= $data['doctor_id_220082']?>">
                </td>
            </tr>
            <table>
    </form>
    <a href="read_user_220082.php">CANCEL</a>
</body>
</html>
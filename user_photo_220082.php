<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Petluy || Website</title>
</head>
<body>
    <h1>Petluy</h1><hr>
    <h3>Change Photo</h3>
    <?php
    include "connection_220082.php";
    $query = "SELECT * FROM user_220082 WHERE userid_220082='$_SESSION[userid]'";
    $user = mysqli_query($db_connection, $query);
    $data = mysqli_fetch_assoc($user);
    ?>
    <form method="post" action="user_upload_220082.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                <img src="uploads/users/<?=$data['photo_220082'];?>" alt="" width="100" height="100">
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
                    <input type="hidden" name="photo_220082" value="<?= $data['photo_220082']?>">
                    <input type="hidden" name="userid_220082" value="<?= $data['userid_220082']?>">
                </td>
            </tr>
            <table>
    </form>
    <a href="index.php">CANCEL</a>
</body>
</html>
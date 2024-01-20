<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !'); window.location.replace('form_login_220082.php');</script>";
}
if ($_SESSION['usertype'] != 'Manager') {
    echo "<script>alert('Acces Forbidden !'); window.location.replace('index.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Users || Website</title>
    <link rel="stylesheet" href="style/add.css">
    <?php
    include "utility/main.php";
    ?>
</head>

<body>
    <div class="header">
        <p><a href="index.php">Home</a></p>
        <h1>User</h1>
        <p><a href="read_user_220082.php">Cancel</a></p>
    </div>
    <div class="header1">
        <h3>Form Add User</h3>
    </div>
    <?php
    include "connection_220082.php";
    $query = "SELECT * FROM user_220082 WHERE userid_220082 = '$_GET[id]'";
    $user = mysqli_query($db_connection, $query);
    $data = mysqli_fetch_assoc($user);
    ?>
    <form method="post" action="update_user_220082.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username_220082" value="<?= $data['username_220082'] ?>" required></td>
            </tr>
            <td>UserType</td>
            <td>
                <input type="radio" name="usertype_220082" value="Manager" <?= ($data['usertype_220082'] == 'Manager') ? 'checked' : '' ?> required> Manager
                <input type="radio" name="usertype_220082" value="Staff" <?= ($data['usertype_220082'] == 'Staff') ? 'checked' : '' ?> required> Staff
            </td>
            </tr>
            <tr>
                <td>Fullname</td>
                <td><input type="text" name="fullname_220082" value="<?= $data['fullname_220082'] ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn" type="submit" name="save" value="SAVE">
                    <input class="btn" type="reset" name="reset" value="RESET">
                    <input type="hidden" name="userid_220082" value="<?= $data['userid_220082'] ?>">
                </td>
            </tr>
            <table>
    </form>
</body>

</html>
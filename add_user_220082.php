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
</head>

<body>
    <h1>UsersLuy</h1>
    <hr>
    <h3>Form Add User</h3>
    <form method="post" action="create_user_220082.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username_220082"></td>
            </tr>
            <tr>
                <td>UserType</td>
                <td>
                    <input type="radio" name="usertype_220082" value="Manager" required> Manager
                    <input type="radio" name="usertype_220082" value="Staff" required> Staff
                </td>
            </tr>
            <tr>
                <td>Fullname</td>
                <td><input type="text" name="fullname_220082" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                </td>
            </tr>
            <table>
    </form>
    <p><a href="read_user_220082.php">CANCEL</a></p>
</body>

</html>
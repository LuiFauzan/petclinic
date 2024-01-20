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
        <p><a href="index.php">Cancel</a></p>
    </div>
    <div class="header1">
        <h3>Change your password</h3>
    </div>
    <form method="post" action="update_password_220082.php">
        <table>
            <tr>
                <td>New Password</td>
                <td><input type="password" name="new_password_220082" id="new" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp; <input type="checkbox" onclick="show()">Show Password</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input class="btn" type="submit" name="change" value="CHANGE">
                    <input class="btn" type="reset" name="reset" value="RESET">
                </td>
            </tr>
            <table>
    </form>
    <script>
        function show() {
            var x = document.getElementById("new");
            if (x.type === "password") {
                x.type = 'text'
            } else {
                x.type = 'password'
            }
        }
    </script>
</body>

</html>
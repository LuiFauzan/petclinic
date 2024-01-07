<!DOCTYPE html>
<html lang="en">
<head>
    <title>PetLuy || Website</title>
</head>
<body>
    <h1>PetLuy</h1><hr>
    <h3>Change your password</h3>
    <form method="post" action="update_password_220082.php">
        <table>
            <tr>
                <td>New Password</td>
                <td><input type="password" name="new_password_220082" id="new"required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp; <input type="checkbox" onclick="show()">Show Password</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                <input type="submit" name="change" value="CHANGE">
                <input type="reset" name="reset" value="RESET">
                </td>
            </tr>
            <table>
    </form>
    <p><a href="index.php">CANCEL</a></p>
    <script>
        function show(){
            var x = document.getElementById("new");
            if(x.type === "password"){
                x.type = 'text'
            }else{
                x.type = 'password'
            }
        }
    </script>
</body>
</html>
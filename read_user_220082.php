<?php
session_start();
if(!isset($_SESSION['login'])){
    echo "<script>alert('Please Login First !'); window.location.replace('form_login_220082.php');</script>";
}
  if($_SESSION['usertype'] != 'Manager'){
  echo "<script>alert('Acces Forbidden !'); window.location.replace('index.php');</script>";  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWebsite</title>
</head>
<body>
   <h1>User Website</h1> 
   <p><a href="add_user_220082.php">Add new user</a></p>
    <form method="post"action="" >
        <table border="2">
          <tr align='center'>
            <td>No</td>
            <td>UserName</td>
            <td>UserType</td>
            <td>FullName</td>
            <td>Photo</td>
            <td colspan="3" align='center'>Action</td>
          </tr>
          <?php
            include "connection_220082.php";
            $query = "SELECT * FROM user_220082";
            $user = mysqli_query($db_connection, $query);

            $i = 1;
            foreach($user as $data):
          ?>
          <tr>
            <td><?php echo $i++?></td>
            <td><?php echo $data['username_220082']?></td>
            <td><?php echo $data['usertype_220082']?></td>
            <td><?php echo $data['fullname_220082']?></td>
            <td align="center">
            <img src="uploads/users/<?=$data['photo_220082']?>" alt="" width="50"height="50"> <br>
              <a href="user_photo_220082.php?id=<?=$data['userid_220082']?>">Change Photo</a>
            </td>
            <td><a href="edit_user_220082.php?id=<?=$data['userid_220082']?>">Edit user</a></td>
            <td><a href="delete_user_220082.php?id=<?=$data['userid_220082']?>" onclick="return confirm('Are You Sure?')">Delete user</a></td>
            <td><a href="reset_password_220082.php?id=<?=$data['userid_220082']?>&type=<?=$data['usertype_220082']?>" onclick="return confirm('Are You Sure to reset the password?')">Reset Password</a></td>
          </tr>
          <?php
          endforeach;
          ?>
        </table>
    </form>
    <p><a href="index.php">  <= Back</a></p>
</body>
</html>
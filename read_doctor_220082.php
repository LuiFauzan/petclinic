<?php
session_start();
if(!isset($_SESSION['login'])){
    echo "<script>alert('Please Login First !'); window.location.replace('form_login_220082.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoctorLuy</title>
</head>
<body>
   <h1>Doctor Website</h1> 
   <p><a href="add_doctor_220082.php">Add new doctor</a></p>
    <form method="post"action="" align="center">
        <table border="2">
          <tr>
            <td>No</td>
            <td>Name</td>
            <td>Gender</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Photo</td>
            
            <td colspan="2">Action</td>
          </tr>
          <?php
            include "connection_220082.php";
            $query = "SELECT * FROM doctor_220082";
            $doctor = mysqli_query($db_connection, $query);

            $i = 1;
            foreach($doctor as $data):
          ?>
          <tr>
            <td><?php echo $i++?></td>
            <td><?php echo $data['doctor_name_220082']?></td>
            <td><?php echo $data['doctor_gender_220082']?></td>
            <td><?php echo $data['doctor_address_220082']?></td>
            <td><?php echo $data['doctor_phone_220082']?></td>
            <td><img src="uploads/doctors/<?=$data['doctor_photo_220082']?>" alt="" width="50"height="50"> </td>
            <td><a href="edit_doctor_220082.php?id=<?=$data['doctor_id_220082']?>">Edit Doctor</a></td>
            <td><a href="delete_doctor_220082.php?id=<?=$data['doctor_id_220082']?>" onclick="return confirm('Are You Sure?')">Delete Doctor</a></td>
          </tr>
          <?php
          endforeach;
          ?>
        </table>
    </form>
    <p><a href="index.php">  <= Back</a></p>
</body>
</html>
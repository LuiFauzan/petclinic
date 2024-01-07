<?php
if(isset($_POST['save'])){
    include "connection_220082.php";

    $query = "UPDATE user_220082 SET username_220082 = '$_POST[username_220082]',
    password_220082 = '$_POST[password_220082]',
    usertype_220082 = '$_POST[usertype_220082]',
    fullname_220082 =  '$_POST[fullname_220082]'
    WHERE userid_220082 = '$_POST[userid_220082]'";
    $update = mysqli_query($db_connection ,$query);
if($update){
    echo "<script>alert('User Updated Successfully')</script>"; 
}else{
    echo "<script>alert('User update Failed')</script>";
}
}
?>
<script>
    window.location.replace("read_user_220082.php");
</script>
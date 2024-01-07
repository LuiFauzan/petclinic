<?php
if(isset($_POST['save'])){
    include "connection_220082.php";
    // create default password
    $password = password_hash($_POST['usertype_220082'], PASSWORD_DEFAULT);

    $query = "INSERT INTO user_220082 (username_220082,password_220082,usertype_220082,fullname_220082) VALUES ('$_POST[username_220082]','$password','$_POST[usertype_220082]','$_POST[fullname_220082]')";
    $create = mysqli_query($db_connection ,$query);
if($create){
    echo "<script>alert('User Added Successfully')</script>"; 
}else{
    echo "<script>alert('User Add Failed')</script>";
}
}
?>
<script>
    window.location.replace("read_user_220082.php");
</script>
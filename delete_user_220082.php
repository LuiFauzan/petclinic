<?php
if(isset($_GET['id'])){
    include "connection_220082.php";

    $query = "DELETE FROM user_220082 WHERE userid_220082 = '$_GET[id]'";
    $delete = mysqli_query($db_connection ,$query);
if($delete){
    echo "<script>alert('User Deleted Successfully')</script>"; 
}else{
    echo "<script>alert('User delete Failed')</script>";
}
}
?>
<script>
    window.location.replace("read_user_220082.php");
</script>
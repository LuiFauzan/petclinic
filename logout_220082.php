<?php
session_start();
session_destroy();
echo "<script>alert('Logout Succes !');window.location.replace('form_login_220082.php');</script>";
?>
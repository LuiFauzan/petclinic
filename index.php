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
    <title>MyWebsite</title>
    <?php
        include"utility/main.php";
    ?>
    <style>
        body{
            margin: 0;
            width: 100vw;
            height: 100vh;
            background: #ecf0f3;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            place-items: center;
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
            
        }
      
        .main{
            width:100%;
            height:100vh;
            border:1px solid;
            background-color:var(--abu-tua);
        }
        .list-report{
            display:none;
        }
        .profile{
            /* border:1px solid; */
            /* display:fixed; */
            width:25%;
            background:var(--biru-muda);
            height:100vh;
            float:center;
            align-items:center;
            text-align:center;
            position:absolute;
            margin:0;
            box-shadow:1px 1px 40px black;
            /* top:100px; */
        }
        .profile > img{
            /* display:flex; */
        /* position: relative; */
        margin-bottom:50px;
        box-sizing:border-box;
        width:35%;
        height:auto;
        border-radius:50%;
        box-shadow: 2px 2px 10px black, -2px -2px 10px black;
        position:relative;
        top:50px;
        }
        ul{
            list-style:none;
        }
        a{
            text-decoration:none;
        }
        .menu a{
            display:flex;
            padding-left:0;
            color:white;
            position: relative;
            top:0;
            left:40px;
            margin:0;
            padding:0; 
            width:40%;
        }
        .menu-content {
            display: none;
            position: absolute;
            /* background-color: #f9f9f9; */
            min-width: 1120px;
            height:40vh;
            left:425px;
            /* box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); */
            z-index: 0;
            align-item:center;
            text-align:center;
            justify-content:center;
            
        }

        .menu-content ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display:flex;
        }

        .menu-content li {
            padding: 8px;
            display:inline;
            margin-left:120px;
            margin-bottom:500px;
        }

        .menu-content a {
            text-decoration: none;
            color: #333;
            display: inline;
            /* margin-top:50px; */
            /* padding:70px; */
            font-weight:bold    ;
        }
        .img-list{
            /* border:1px solid black; */
            margin-bottom:30px;
            
        }
        .img-list img{
            position:absolute;
            width:100px;
            right: -40px;
            bottom:20px;
            top:0;
        }
        
       
        .menu img{
            display:flex;
            position: relative;
            top:27px;
        }
        .change a{
            /* border:1px solid white; */
            display:flex;
            padding-left:0;
            color:white;
            position: relative;
            top:0;
            left:40px;
            margin:0;
            padding:0;
            width:40%;
        }
        .change img{
            display:flex;
            position: relative;
            top:27px;
            
        }
        .logout h4 >a{
            color:black;
            display:flex;
            position:absolute;
            bottom:25px;
            left:62%;
            font-size:1.5em;
            color:white;
        }
        .logout img{
            width:30px;
            display:flex;
            position :absolute;
            bottom:30px;
            left:83%;

        }
    </style>
</head>
<body>
    <!-- <h1>Welcome to our website </h1><hr> -->
    <div class="main"> 
        <!-- <hr> -->
        <!-- <h1>Welcome To Our Websit</h1> -->
    <ul class="profile">
        
            <img src="uploads/users/<?=$_SESSION['photo']?>" alt="" width="80" height="80"><br>  
        
        <p>Welcome <strong><?=$_SESSION['fullname'];?></strong>, you are login as <strong><?=$_SESSION['usertype'];?></strong></p>
        <li class="menu" id="dropdownMenu">
            <img src="img/Menu.png" alt="" width="30">
            <a href="#">Menu</a>
            <div class="menu-content">
                <ul>
                
                    <li>
                    <div class="img-list">
                        <img src="img/petlist.png" alt="" width="50">
                    </div>
                        <a href="read_pet_220082.php">Pet List</a>
                    </li>
                <li>
                <div class="img-list">
                        <img src="img/doctorlist.png" alt="" width="50">
                    </div>
                <a href="read_doctor_220082.php">Doctor List</a>
                </li>
                
                <?php 
                if($_SESSION['usertype'] == 'Manager'){?>
                    <li>
                    <div class="img-list">
                        <img src="img/userlist.png" alt="" width="50">
                    </div>
                    <a href="read_user_220082.php">User List</a>
                </li>
                <li>
                <div class="img-list">
                        <img src="img/mr.png" alt="" width="50">
                    </div>
                    <a href="report.php">Monthly Report</a>
                </li>
                <?php
                }
                ?>
                </ul>
         </div>
        </li>
        <li class="change">
            <img src="img/changephoto.png" alt="" width="30">
            <a href="user_photo_220082.php?id=<?=$_SESSION['userid']?>">Change Photo</a>
        </li>
       
        <li class="change">
            <img src="img/changepass.png" alt="" width="30">
        <a href="change_password_220082.php">Change Password</a>
        </li>
        <li class="logout">
            <h4>
                <a href="logout_220082.php">logout</a>
            </h4>
        <a href="logout_220082.php"><img src="img/logout.png" alt=""></a>
        </li>
        
    </ul>
    </div>
    <script>
    document.getElementById('dropdownMenu').addEventListener('click', function () {
        var menuContent = this.querySelector('.menu-content');
        menuContent.style.display = (menuContent.style.display === 'block') ? 'none' : 'block';
    });
</script>

</body>
</html>
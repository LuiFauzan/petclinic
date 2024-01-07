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
    <title>PetLuy</title>
    <?php
include "utility/main.php";
?>
    <style>
        body {
        background:var(--abu-muda);
        color: #444;
        font: 100%/30px 'poppins';
        text-shadow: 0 1px 0 #fff;
        }
        .header{
            /* border:1px solid black; */
            display:flex;
            background:var(--biru-muda);
            align-items:center;
            text-align:center;
            justify-content:space-around;
            margin-left:10px;
            margin-right:10px;
        }
        .header img{
            display:flex;
            position:absolute;
            left:11%;
            width:2%;

        }
        .header a,h1{
            color:white;
            text-decoration:none;
        }
        .header1{
            display:flex;
            border:1px solid black;
        }
        strong {
            font-weight: bold; 
          }
          
          em {
            font-style: italic; 
          }
          
          table {
            background: #f5f5f5;
            border-collapse: separate;
            box-shadow: inset 0 1px 0 #fff;
            font-size: 12px;
            line-height: 24px;
            margin: 30px auto;
            text-align: left;
            width: 800px;
          } 
          
          th {
            background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
            border-left: 1px solid #555;
            border-right: 1px solid #777;
            border-top: 1px solid #555;
            border-bottom: 1px solid #333;
            box-shadow: inset 0 1px 0 #999;
            color: #fff;
            font-weight: bold;
            padding: 10px 15px;
            position: relative;
            text-shadow: 0 1px 0 #000;  
          }
          
          th:after {
            background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
            content: '';
            display: block;
            height: 25%;
            left: 0;
            margin: 1px 0 0 0;
            position: absolute;
            top: 25%;
            width: 100%;
          }
          
          th:first-child {
            border-left: 1px solid #777;  
            box-shadow: inset 1px 1px 0 #999;
          }
          
          th:last-child {
            box-shadow: inset -1px 1px 0 #999;
          }
          
          td {
            border-right: 1px solid #fff;
            border-left: 1px solid #e8e8e8;
            border-top: 1px solid #fff;
            border-bottom: 1px solid #e8e8e8;
            padding: 10px 15px;
            position: relative;
            transition: all 300ms;
          }
          
          td:first-child {
            box-shadow: inset 1px 0 0 #fff;
          } 
          
          td:last-child {
            border-right: 1px solid #e8e8e8;
            box-shadow: inset -1px 0 0 #fff;
          } 
          
          tr {
            background: url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIADsAZAMBIgACEQEDEQH/xAAYAAEBAQEBAAAAAAAAAAAAAAAAAQIHA//EADMQAAADAwoFBAICAwAAAAAAAAERIQISkQAiMUJRYaGxwfAyQWKBogMT0eFxwkOCIzPi/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AOsABEVUv6/a4xpO8yIr3P8ApcYuR2eB6rs1nDcVPNw9VxvUKIOnyd7unquzUM0zq+J6rjGiLogFAs93T1XGMGaRzXbVdPVcYhRF24u7h5tLs1gzDOa7bVPXfNQzaZpWq4ebS7NTKcM1yyqeq7NQpu2gVtQ8xXZqCbRNKxXD1XZrKLisqHmO+auCmaVtQ9VxvULp4HmK4xjKdJWK4eYrjEIlTy8DzaXGMEQZpmFarh5iuMQqM8qO7h5iuzUCXF3cPMVxiBKOXgeYrs1gTT5O21T/AGXGIWZXa9RkeYAycb5WWRaZZEnhYKqAPF+RtkkGhAgIeXgeYrs1yTvbu4eYrs10AkZo73dPVcYzhuLu4eYrjEAoBUAB3ufLS4xBMomlYrh5iuMQJcRXufIrjEMwzmu21T1XGIAmUTSsqHmO/wA0AIjq+J6rjGcJ8nTvd+9/mm727uHmK7NQnCfJ073ftdmpjm7Nd8T1XGIZhHNdtq/Yn2OIeRo7ZVPVcYgJ0+Tvd09fmIQAKAdKxXDzFcYjdLk73dPX5iBKULu4ebS4xBp4HmK4xCLpITtlU9Vxiop5eB5iuMaM24u7h5iuzUMi37c15tguQMHG+SVAXAd90fTKqyyAxvkkFaB0qrtqunquzWMpShUc3D1XGI3KJpWVD1XZrREqJpUnUP8Ab5iEFKELu4eYrs1f6+hw/wCv2uMaCUcvA8xXZrOAqjpf1+12ag4S6Svd+1xiGYZzXbap675rSduI73PkVxjOAiR2yr9rs1BwdBeHyIn2OLhuLu4eYrjEEyiaRUVPkVxi4bi7uHmK4xBw3F3cPMVxiFKEI73PkVxi4aZpWq4eYrs1cPYr3PkVxiDgpmlbUPVcYhm3F3cPMV2a0BcomlZUPVcYwEpQu7h5tLjEKAkBPNMdLLLxfkbZJQWnRJ9tgqoAcRtkkBlaExdP9l3zgi4ZzXfE9V2a1r+To9MWmbhnLgEp6n+M3EcZEWbhWQUqenxPX5iAXKJpWVDzFdmst6PTFpm4bZRlPcKoyIs3Csg0zcheFv5FcYqLi7ufIrjE3/J0MmzcKyrCe50emLTNwqsgE7cVtQ8xXGM4Xuju6eq7NXqzPcdRxkRZuFZAT3OhkRZuFZAZmUTSsqHmK7NQcyq0dJ6rjGMJ7nR6YtM3CqyoVulkRC4VkDhPk6d7v2uMQoZI73dP9lxiZQ+j0waZuFVkYQ+j0xaZuFVkFf8AbmveowXIGTjfJLy9T1W/SdZ9MXQdOiUkH//Z); 
          }
          
          tr:nth-child(odd) td {
            background: #f1f1f1 url(https://jackrugile.com/images/misc/noise-diagonal.png); 
          }
          
          tr:last-of-type td {
            box-shadow: inset 0 -1px 0 #fff; 
          }
          
          tr:last-of-type td:first-child {
            box-shadow: inset 1px -1px 0 #fff;
          } 
          
          tr:last-of-type td:last-child {
            box-shadow: inset -1px -1px 0 #fff;
          } 
          
          tbody:hover td {
            color: transparent;
            text-shadow: 0 0 3px #aaa;
          }
          
          tbody:hover tr:hover td {
            color: #444;
            text-shadow: 0 1px 0 #fff;
          }
         
    </style>
   
</head>
<body>
    <div class="header">
        <img src="img/addpet.png" alt="" width="50">
        <a href="add_pet_220082.php">Add new pet</a>
        <h1>PetLuy Website</h1>
        <a href="index.php"> Back</a>
        <img src="img/back.png" alt="" width="50">
    </div>
    <div class="header1">
        <h3>Form pet</h3>
        <p>Click on the pet name to view medical record</p>
    </div>
        <form method="post"action="">
        <table border="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>type</th>
                    <th>Gender</th>
                    <th>Age(Month)</th>
                    <th>Photo</th>
                    <th>Food</th>
                    <th>Owner</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
        <?php
            include "connection_220082.php";
            $query = "SELECT * FROM pet_220082";
            $pet = mysqli_query($db_connection, $query);

            $i = 1;
            foreach($pet as $data):
        ?>
        <tbody>

            <tr>
                <td><?php echo $i++;?></td>
                <td><strong><a href="medicals_220082.php?pet_id=<?=$data['pet_id_220082']?>"><?php echo $data['pet_name_220082'];?></a></strong></td>
                <td><?php echo $data['pet_type_220082'];?></td>
                <td><?php echo $data['pet_gender_220082'];?></td>
                <td><?php echo $data['pet_age_220082'];?></td>
                <td align="center">
                    <img src="uploads/pets/<?= $data['pet_photo_220082'];?>" alt="" width="50" height="50"><br>
                    <a href="pet_photo_220082.php?id=<?=$data['pet_id_220082'];?>">Change Photo</a>
                </td>
                <td><?php echo $data['pet_food_220082'];?></td>
                <td><?= $data['pet_owner_220082'];?></td>
                <td><?= $data['pet_address_220082'];?></td>
                <td><?= $data['pet_phone_220082'];?></td>
                <td><a href="edit_pet_220082.php?id=<?=$data['pet_id_220082']?>">Edit Pet</a></td>
                <td><a href="delete_pet_220082.php?id=<?=$data['pet_id_220082']?>" onclick=
                "return confirm('Are you sure?')">Delete Pet</a></td>
            </tr>
            <?php
        endforeach;
        ?>
        </tbody>
        </table>
    </form>
    <p><a href="index.php"> <= Back</a></p>
</body>
</html>
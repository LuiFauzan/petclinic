<?php
session_start();
if (!isset($_SESSION['login'])) {
  echo "<script>alert('Please Login First !'); window.location.replace('form_login_220082.php');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PetLuy</title>
  <link rel="stylesheet" href="style/table.css">
  <?php
  include "utility/main.php";
  ?>
</head>

<body>
  <div class="header">
    <a href="add_pet_220082.php">Add new pet</a>
    <h1>PetLuy Website</h1>
    <a href="index.php"> Back</a>
  </div>
  <div class="header1">
    <h3>Form pet</h3>
    <p>Click on the pet name to view medical record</p>
  </div>
  <form method="post" action="">
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
      foreach ($pet as $data) :
      ?>
        <tbody>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><strong><a style="color: black;" href="medicals_220082.php?pet_id=<?= $data['pet_id_220082'] ?>"><?php echo $data['pet_name_220082']; ?></a></strong></td>
            <td><?php echo $data['pet_type_220082']; ?></td>
            <td><?php echo $data['pet_gender_220082']; ?></td>
            <td><?php echo $data['pet_age_220082']; ?></td>
            <td align="center">
              <img src="uploads/pets/<?= $data['pet_photo_220082']; ?>" alt="" width="50" height="50"><br>
              <a class="btn" style="n-bottom:10px ;" href="pet_photo_220082.php?id=<?= $data['pet_id_220082']; ?>">Change Photo</a>
            </td>
            <td><?php echo $data['pet_food_220082']; ?></td>
            <td><?= $data['pet_owner_220082']; ?></td>
            <td><?= $data['pet_address_220082']; ?></td>
            <td><?= $data['pet_phone_220082']; ?></td>
            <td><a class="btn" href="edit_pet_220082.php?id=<?= $data['pet_id_220082'] ?>">Edit Pet</a></td>
            <td><a class="btn" href="delete_pet_220082.php?id=<?= $data['pet_id_220082'] ?>" onclick="return confirm('Are you sure?')">Delete Pet</a></td>
          </tr>
        <?php
      endforeach;
        ?>
        </tbody>
    </table>
  </form>
</body>

</html>
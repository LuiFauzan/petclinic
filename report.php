<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petluy || Website</title>
    <link rel="stylesheet" href="style/add.css">
    <link rel="stylesheet" href="style/table.css">
    <?php
    include "utility/main.php";
    ?>
</head>

<body>
    <div class="header">
        <p><a href="index.php">Home</a></p>
        <h1>Petluy</h1>
        <p><a href="index.php">Back</a></p>
    </div>
    <div class="header1">
        <h3>Monthly report</h3>
    </div>
    <?php
    $month = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
    $year = date('Y');
    ?>
    <form action="">
        <p>Select
            <select name="month" required>
                <option value="">Month</option>
                <?php
                for ($m = 1; $m <= 12; $m++) {
                ?>
                    <option value="<?= $m ?>"><?= $month[$m - 1] ?></option>
                <?php } ?>
            </select>

            <select name="year" required>
                <option value="">Year</option>
                <?php
                for ($y = 0; $y <= 2; $y++) {
                ?>
                    <option value="<?= $year - $y ?>"><?= $year - $y ?></option>
                <?php } ?>
            </select>
            <input class="btn" style="margin-top: 20px;" type="submit" value="View Report">
        </p>
    </form>
    <?php
    if (isset($_GET['year'])) {
        include "connection_220082.php";
        // $query = "SELECT * FROM medicals_220082 ";
        $query = "SELECT m.mr_date_220082, d.doctor_name_220082, p.pet_name_220082, p.pet_owner_220082, m.cost_220082 FROM medicals_220082 AS m, doctor_220082 AS d, pet_220082 AS p WHERE m.doctor_id_220082 = d.doctor_id_220082 AND m.pet_id_220082 = p.pet_id_220082 AND MONTH(m.mr_date_220082)='$_GET[month]' AND YEAR(m.mr_date_220082)='$_GET[year]'";
        $report = mysqli_query($db_connection, $query);
    ?><div class="header1">

            <h4>Report Periode <?= $month[$_GET['month'] - 1] ?> - <?= $_GET['year'] ?></h4>
        </div>
        <form style="border: none;margin:0 200px;box-shadow:0px 0px 0px black;">

            <table border="2">
                <thead>

                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Doctor</th>
                        <th>Pet</th>
                        <th>Owner</th>
                        <th>Pay ($)</th>
                    </tr>
                </thead>
                <?php
                if (mysqli_num_rows($report) > 0) {
                    $i = 1;
                    $total = 0;
                    foreach ($report as $data) :
                        $total = $total + $data['cost_220082'];
                ?>
                        <tbody>

                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $data['mr_date_220082'] ?></td>
                                <td><?= $data['doctor_name_220082'] ?></td>
                                <td><?= $data['pet_name_220082'] ?></td>
                                <td><?= $data['pet_owner_220082'] ?></td>
                                <td align="right"><?= $data['cost_220082'] ?></td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                    <tr>
                        <th colspan="7" align="right">Total : $<?= $total ?></th>
                    </tr>
                <?php } else { ?>
                    <tr>
                        <th colspan="7" align="center">No record !</th>
                    </tr>
                <?php } ?>
            </table>
        <?php } ?>
        </form>

</body>

</html>
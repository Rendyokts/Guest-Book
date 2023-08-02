<?php
    include "connection.php";

    // Persiapan untuk Excel 
    header ("Content-Type: application/vnd-ms-excel");
    header ("Content-Disposition: attachment; filename=Export Excel Data Guest.xls");
    header ("Pragma: no-cache");
    header ("Expires:0");
?>

<table border="1">
    <thead>
        <tr>
            <th colspan="6"> Guest Data Summary</th>
        </tr>
        <tr>
            <th>No.</th>
            <th>Date</th>
            <th>Name</th>
            <th>Purposes</th>
            <th>Address</th>
            <th>Phone Number</th>
        </tr>
    </thead>
    <tbody>
            <?php

                $startDate = $_POST['startDate1'];
                $endDate = $_POST['endDate1'];
                
                $show = mysqli_query($connection, "SELECT * FROM tbtamu where date BETWEEN '$startDate' and '$endDate' order by date asc"); //Memanggil data tamu menggunakan query yang ada pada database phpMyAdmin
                $no = 1;
                while ($data = mysqli_fetch_array($show)){ //Tampilkan data dalam bentuk array lalu ditampung dalam variable $data
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data['date'] ?></td>
                <td><?= $data['name'] ?></td>
                <td><?= $data['purpose'] ?></td>
                <td><?= $data['address'] ?></td>
                <td><?= $data['phone'] ?></td>
            </tr>

            <?php
                }
            ?>
            </tbody>
</table>
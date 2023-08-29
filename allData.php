<!-- Menambahkan page header pada page Data Summary -->
<?php include "header.php"; ?> 


<!-- row start -->
<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <div class="card shadow mb-4 mt-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Guest Data</h6>
            </div>
                <div class="my-3">
                    <div class="table-responsive p-4">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0"> 
                                    <!-- Tabel data tamu -->
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Purposes</th>
                                            <th>To Whom</th>
                                            <th>Address</th>
                                            <th>Phone Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Purposes</th>
                                            <th>To Whom</th>
                                            <th>Address</th>
                                            <th>Phone Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $show = mysqli_query($connection, "SELECT * FROM tbtamu"); //Memanggil data tamu menggunakan query yang ada pada database phpMyAdmin
                                            $no = 1;
                                            while ($data = mysqli_fetch_array($show)){ 
                                                //Tampilkan data dalam bentuk array lalu ditampung dalam variable $data
                                        ?>
                                            <tr>
                                                <!-- Menampilkan data tamu dengan mengambil data dari array $data -->
                                                <td><?= $no++ ?></td>
                                                <td><?= $data['date'] ?></td>
                                                <td><?= $data['name'] ?></td>
                                                <td><?= $data['purpose'] ?></td>
                                                <td><?= $data['meet'] ?></td>
                                                <td><?= $data['address'] ?></td>
                                                <td><?= $data['phone'] ?></td>
                                                <td>
                                                    <!-- Button delete untuk menghapus data pada tabel -->
                                                    <button type="button" name="delete" class="btn btn-danger btn-sm" onclick="deleteVisitor(<?= $data['id'] ?>)">
                                                        <!-- <i class="fa fa-trash"></i> -->
                                                    Delete
                                                    </button>
                                                
                                                
                                                    <!-- Button edit untuk mengubah data pada tabel -->
                                                    <button type="button" name="edit" class="btn btn-warning btn-sm" onclick="editVisitor(<?= $data['id'] ?>)">
                                                        <!-- <i class="fa fa-pencil-edit" aria-hidden="true"></i> -->
                                                    Edit
                                                    </button>
                                                </td>
                                            </tr>

                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>

                                <center>
                                    <!-- Menentukan hari awal dan hari akhir untuk menampilkan sejumlah data tamu -->
                                    <form action="exportExcel.php" method="POST">
                                        <div class="col-md-4">
                                            <input type="hidden" name="startDate1" value="<?= @$_POST['startDate']?>">
                                            <input type="hidden" name="endDate1" value="<?= @$_POST['endDate']?>">

                                            <!-- Button untuk mengarahkan ke Output excel berupa hasil dari data yang sudah dipilih berdasarkan hari -->
                                            <button class="btn btn-success form-control" name="btnExport">
                                                <i class="fa fa-download"></i> Export Data Excel
                                            </button>
                                        </div>                                        
                                    </form>
                                </center>
                            </div>
                </div>
        </div>
    </div>
</div>

<!-- Menambahkan page footer pada page summary -->
<?php include "footer.php"; ?>
<!-- Menambahkan page header pada page Data Summary -->
<?php include "header.php"; ?> 


<!-- row start -->
<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Guest Data Summary</h6>
            </div>
                <div class="card-body">
                    <form action="" method="POST" class="text-center">
                        <div class="row">
                        <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <!-- Menyaring data tamu dengan menentukan tanggalnya -->
                                    <label for="">Start Date</label>
                                    <input type="date" class="form-control" name="startDate" required
                                    value="<?= isset($_POST['startDate']) ? $_POST['startDate'] : date('Y-m-d')?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <!-- Menyaring data tamu dengan menentukan tanggalnya -->
                                    <label for="">End Date</label>
                                    <input type="date" class="form-control" name="endDate" required
                                    value="<?= isset($_POST['endDate']) ? $_POST['endDate']: date('Y-m-d')?>">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Button Show data untuk menampilkan sejumlah data yang telah diatur oleh user berdasarkan hari -->
                            <div class="col-md-4"></div>
                                <div class="cold-md-2">
                                    <button class="btn btn-primary form-control" 
                                    name="btnShow"><i class="fa fa-search"></i> Show Data
                                    </button>
                                </div>
                        <!-- Button Return untuk kembali ke bagian admin page atau index page -->
                                <div class="col-md-2 mb-4">
                                    <a href="index.php" class="btn btn-danger form-control">
                                        <i class="fa fa-backward"></i> Return
                                    </a>
                                </div>
                        </div>
                    </form>

                    <?php
                    // Program mengecek apabila user meng-klik Show Button
                        if(isset($_POST['btnShow'])) :

                    ?>
                    <div class="table-responsive">
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
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php

                                            $startDate = $_POST['startDate'];
                                            $endDate = $_POST['endDate'];
                                            $show = mysqli_query($connection, "SELECT * FROM tbtamu where date BETWEEN '$startDate' and '$endDate' order by id desc"); //Memanggil data tamu menggunakan query yang ada pada database phpMyAdmin
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

                            <?php
                                endif;
                            ?>
                </div>
        </div>
    </div>
</div>
<!-- row end -->

<!-- Menambahkan page footer pada page summary -->
<?php include "footer.php"; ?>
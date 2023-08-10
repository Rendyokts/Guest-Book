<!-- Calling Header File -->
<?php include "header.php"; ?>
<?php include "admin.php"; ?>
        <!-- Head Start -->
        <div class="head text-center">
            <img src="assets/img/digitalent-mobile.png" width="100">
            <h2 class="text-white">Digitalent <br> Guest Book</h2>
        </div>
        <!-- Head End -->

        <!-- Row Start -->
        <div class="row mt-2">
            <!-- col-lg-7 Start-->
            <div class="col-lg-7 mb-3">
                <div class="card-background rounded bg-white shadow">
                    <!-- Card Body Start -->
                    <div class="card-body">

                        <!-- Form untuk admin menginput data tamu harian -->
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><b>Visitors ID</b></h1>
                            </div>
                            <form class="user" method="POST" action="">

                            <!-- Input nama tamu -->
                                <div class="form-group">
                                    <input type="text" name="name" id="" class="form-control-user form-control"
                                    placeholder="Visitor Name" required>
                                </div>

                            <!-- input tujuan atau keperluan tamu -->
                                <div class="form-group">
                                    <input type="text" name="purpose" id="" class="form-control-user form-control"
                                    placeholder="Visitor Purpose" required>
                                </div>

                            <!-- input tamu ingin bertemu dengan siapa -->
                                <div class="form-group">
                                    <input type="text" name="meet" id="" class="form-control-user form-control"
                                    placeholder="Who To Meet" required>
                                </div>

                            <!-- input alamat tamu -->
                                <div class="form-group">
                                    <input type="text" name="address" id="" class="form-control-user form-control"
                                    placeholder="Visitor Address" required>
                                </div>

                            <!-- input nomer telpon tamu -->
                                <div class="form-group">
                                    <input type="number" name="phone" id="" class="form-control-user form-control"
                                    placeholder="Visitor Phone Number" required>
                                </div>

                            <!-- tombol simpan data tamu yang akan tersimpan pada database dan ditampilkan pada tabel dibawah -->
                                    <button type="submit" name="btnsave" class="btn btn-primary btn-user btn-block">
                                        Save
                                    </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Rendi Oktavian <br> Digitalent | <?= date('Y')?></a>
                            </div>

                    </div>
                    <!-- Card Body End -->
                </div>
            </div>
            <!-- col-lg-7 end -->
                <div class="col-lg-5 mb-3">
                    <div class="card shadow">
                        <!-- Card Body Start  -->
                        <div class="card-body">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Visitor Statistics</h1>
                            </div>

                            <?php
                                //Deklarasi tanggal
                                $currentDate = date('Y-m-d'); //Menampilkan tanggal sekarang
                            
                                $yesterday = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d')))); //Menampilkan tanggal kemarin

                                $week = date('Y-m-d h:i:s', strtotime('-1 week + 1 day', strtotime($currentDate))); //Mendapatkan 6 hari sebelum tanggal sekarang
                            
                                $thisMonth  = date('m');
                                
                                $today = date('Y-m-d h:i:s'); //Menampilkan hari ini

                                //Mempersiapkan query yang menampilkan jumlah data tamu
                                $currentDate = mysqli_fetch_array(mysqli_query(
                                    $connection, 
                                    "SELECT count(*) FROM tbtamu where date like '%$currentDate%'")); //Menampilkan jumlah data tamu hari ini menggunakan $currentDate

                                $yesterday = mysqli_fetch_array(mysqli_query(
                                    $connection, 
                                    "SELECT count(*) FROM tbtamu where date like '%$yesterday%'")); //Menampilkan jumlah data tamu kemarin menggunakan $currentDate

                                $week = mysqli_fetch_array(mysqli_query(
                                    $connection, 
                                    "SELECT count(*) FROM tbtamu where date BETWEEN '$week' and '$today'")); //Menampilkan jumlah data tamu Satu minggu ini menggunakan batas antara data $week dan $today
                                
                                $aMonth = mysqli_fetch_array(mysqli_query(
                                    $connection, 
                                    "SELECT count(*) FROM tbtamu where month (date) = '$thisMonth'")); //Menampilkan jumlah data tamu Satu bulan ini menggunakan data dari variabel $thisMonth
                                
                                $totalVisitors = mysqli_fetch_array(mysqli_query(
                                    $connection, 
                                    "SELECT count(*) FROM tbtamu")); //Menampilkan jumlah data tamu Satu minggu ini menggunakan batas antara data $week dan $today

                            ?>


                            <!-- tabel untuk menampiilkan statistik tamu -->
                            <table class="table table-bordered">
                                <tr>
                                    <td>Today</td>
                                    <td>: <?= $currentDate[0]; ?></td>
                                </tr>
                                <tr>
                                    <td>Yesterday</td>
                                    <td>: <?= $yesterday[0]; ?></td>
                                </tr>
                                <tr>
                                    <td>This Week</td>
                                    <td>: <?= $week[0]; ?></td>
                                </tr>
                                <tr>
                                    <td>This Month</td>
                                    <td>: <?= $aMonth[0]; ?></td>
                                </tr>
                                <tr>
                                    <td>Total Visitors</td>
                                    <td>: <?= $totalVisitors[0]; ?></td>
                                </tr>
                            </table>
                        </div>
                        <!-- Card Body End -->
                    </div>
                </div>
        </div>
        <!-- End Row -->

                <!-- Tabel untuk menampilkan data tamu harian yang telah diinput oleh admin pada page index.php -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Visitor Data Today [<?= date('d-m-Y')?>]</h6>
                        </div>
                        <div class="card-body">
                            <a href="dataSummary.php" class="btn btn-success mb-3">
                                <i class="fa fa-table"></i>
                                Data Summary
                            </a>
                            
                            <a href="login.php" class="btn btn-danger mb-3 logoutbox">
                                <i class="fa fa-sign-out-alt"></i>
                                Logout
                            </a>
                            

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
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
                                            //Membuat variable tanggal untuk ditampilkan pada tabel data pengunjung
                                            $date = date('Y-m-d');
                                            //Memanggil data tamu menggunakan query yang ada pada database phpMyAdmin
                                            $show = mysqli_query($connection, "SELECT * FROM tbtamu where date like '%$date%' order by id desc");
                                            //Variable $no adalah untuk Nomer urut dalam tabel dan diberikan increment
                                            $no = 1;
                                            //Tampilkan data dalam bentuk array lalu ditampung dalam variable $data
                                            while ($data = mysqli_fetch_array($show)){
                                        ?>
                                            <tr>
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
                                                        <i class="fa fa-trash"></i>
                                                    Delete
                                                    </button>
                                                </td>
                                            </tr>

                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                <!-- Calling Footer Files -->
                <?php include "footer.php"; ?>

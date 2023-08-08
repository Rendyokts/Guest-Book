<!-- Calling Header File -->
<?php include "header.php"; ?>
<?php include "admin.php"; ?>
        <!-- Head Start -->
        <div class="head text-center">
            <img src="assets/img/digitalent-mobile.png" width="100">
            <h2 class="text-white">Digitalent <br> Guest Book</h2>
        <!-- Head End -->

        <!-- Row Start -->
                <div class="row mt-2">
                    <!-- col-lg-7 Start-->
                    <div class="col-lg-12 mb-3">
                        <div class="card-background rounded bg-white shadow">
                            <!-- Card Body Start -->
                            <div class="card-body">

                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b>Visitors ID</b></h1>
                                    </div>
                                    <form class="user" method="POST" action="">

                                        <div class="form-group">
                                            <input type="text" name="name" id="" class="form-control-user form-control"
                                            placeholder="Visitor Name" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="purpose" id="" class="form-control-user form-control"
                                            placeholder="Visitor Purpose" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="meet" id="" class="form-control-user form-control"
                                            placeholder="Who To Meet" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="address" id="" class="form-control-user form-control"
                                            placeholder="Visitor Address" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="number" name="phone" id="" class="form-control-user form-control"
                                            placeholder="Visitor Phone Number" required>
                                        </div>

                                        <button type="submit" name="btnsave" class="btn btn-primary btn-user btn-block">
                                            Update
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
                </div>
        </div>

            <!-- Calling Footer Files -->
            <?php include "footer.php"; ?>
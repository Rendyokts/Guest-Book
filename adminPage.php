<?php include 'header.php'; ?>

        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">

            <div class="col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
            
                            <div class="col-md-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <i class="fa fa-user-circle"></i>
                                        <h1 class="h4 text-gray-900 mb-4">Change Password</h1>
                                    </div>
                                    <form class="user" action="changePwd.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="username" placeholder="Enter Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="new_password" class="form-control form-control-user"
                                                id="new_password" placeholder="Password" required>
                                            <input type="password" name="confirm_password" class="form-control form-control-user mt-3"
                                                id="confirm_password" placeholder="Confirm Password" required>
                                            <input type="checkbox" id="show-password" class="my-3 ml-2"> Show Password
                                        </div>
                                        <!-- <div class="form-group">
                                        </div> -->
                                        <input class="btn btn-primary btn-user btn-block" value="Save Password" type="submit" name="btnchange">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#">Rendi Oktavian | <?= date('Y') ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    
    <!-- Script untuk melihat password -->
    <script src="assets/js/showPasswordAdmin.js"></script>


    <?php include 'footer.php'; ?>
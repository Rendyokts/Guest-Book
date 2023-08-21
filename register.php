<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Guest Book</title>
    
    <link rel="icon" href="assets/img/buku4.png">

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for Data Tables -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

</head>

<body class="body-background" id="page-top">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="card-background col-lg-6 d-lg-block shadow-lg p-5 text-center">
                            <img src="assets/img/buku4.png" width="300" alt="" class="my-5">
                                <!-- <i class="fa fa-address-book" aria-hidden="true"></i> -->
                                <h3 class="text-primary font-weight-bold mt-5">Guest Book</h3>
                                <h6 class="text-primary">Daily Guest Data Recording</h6>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <i class="fa fa-user-circle"></i>
                                        <h1 class="h4 text-gray-900 mb-5">Hallo !<br> Register to get your account !</h1>
                                    </div>
                                    <form class="user" action="registerCheck.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="username" placeholder="Enter Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="password" placeholder="Password" required>
                                            <input type="password" name="confirm_password" class="form-control form-control-user mt-3"
                                                id="confirm_password" placeholder="Confirm Password" required>
                                            <input class="my-3 ml-2" type="checkbox" id="show-password">
                                            <label for="show-password" class="fw-light">Show Password</label>
                                        </div>
                                
                                        <input class="btn btn-primary btn-user btn-block mt-3" value="Register" type="submit" name="btnRegister" id="registerButton">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#">Rendi Oktavian | <?= date('Y') ?></a>
                                        <br>
                                        <a class="small" href="login.php">Already have an account? Login here!</a>
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
    <script src="assets/js/showPasswordRegister.js"></script>

    <!-- Sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Sweet Alert -->
    <!-- <script src="assets/js/loginButton.js"></script> -->

    <?php include 'footer.php'; ?>
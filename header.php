<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Guest Book</title>
    
    <link rel="icon" href="assets/img/buku4.png" width="100">

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

</head>

<body class="body-background" id="page-top">
        <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mt-3 mb-2 " href="dashboard.php">
                <div class="sidebar-brand-icon">
                    <img src="assets/img/buku4.png" width="70">
                </div>
                <div class="sidebar-brand-text mx-1">Guest Book</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link " href="dashboard.php">
                <i class="fa fa-id-card" aria-hidden="true"></i>
                    <span class="">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Databases -->
            <li class="nav-item">
                <a class="nav-link " href="allData.php">
                <i class="fa fa-database"></i>
                    <span class="">Guest Database</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Data Summary-->
            <li class="nav-item">
                <a class="nav-link" href="dataSummary.php">
                    <i class="fas fa-table"></i>
                    <span>Data Summary</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

                <!-- Nav Item - Logout -->
                <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Admin</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="adminPage.php">Change Password</a>
                        <a class="collapse-item" href="register.php">Add User</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Logout -->
            <li class="nav-item logout">
                <a class="nav-link" name="logout" href="#" onclick="confirmLogout()">
                    <i class="fa fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>


                <hr class="sidebar-divider my-0">

            

            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
<!-- End of Sidebar -->
        <div class="container">
            <?php include "connection.php"; ?>
            <script src="assets/js/logoutCheck.js"></script>
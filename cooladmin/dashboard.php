<?php
// ini_set('display_errors', 0);

session_start();

include('connection/connect.php');
if (!isset($_SESSION['admin_user'])) {
    include('index.php');
    exit;
}

// $suitesCount = 0;
// $suitesQuery = mysqli_query($db, "SELECT COUNT(*) AS total FROM suites");
// if ($suitesRow = mysqli_fetch_assoc(result: $suitesQuery)) {
//     $suitesCount = $suitesRow['total'];
// }


// $bookingsCount = 0;
// $bookingsQuery = mysqli_query($db, "SELECT COUNT(*) AS total FROM bookings");
// if ($bookingsRow = mysqli_fetch_assoc($bookingsQuery)) {
//     $bookingsCount = $bookingsRow['total'];
// }

// $newsCount = 0;
// $newsQuery = mysqli_query($db, "SELECT COUNT(*) AS total FROM news");
// if ($newsRow = mysqli_fetch_assoc($newsQuery)) {
//     $newsCount = $newsRow['total'];
// }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Dashboard - Viscosupport</title>
    <!-- -->
    <link rel="icon" href="../images/visco icon.png" type="image/x-icon">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="../images/visco-new-logo-Trim-ezgif.com-crop.gif" width="200px"
                                alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="" alt="" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Admin
                                    <?php echo $_SESSION['admin_user']; ?></span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <?php include('side-nav.php'); ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h2 class="page-title p-2">Dashboard</h2>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <!-- <li><a href="#" class="fw-normal">Dashboard</a></li> -->
                            </ol>

                        </div>
                    </div>
                </div>

            </div>

            <div class="container-fluid">
                <div class="row justify-content-center">

                    <!-- Services -->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <a href="services.php" class="text-decoration-none">
                            <div class="white-box analytics-info d-flex align-items-center justify-content-between p-4 rounded-2xl shadow-xl" style="background:#121332; color:#fdbb00;">

                                <!-- Left: Icon + Text -->
                                <div class="d-flex align-items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#fdbb00" viewBox="0 0 24 24">
                                        <path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm4-4h14v-2H7v2zm0 4h14v-2H7v2z" />
                                    </svg>
                                    <div>
                                        <h3 class="box-title mb-0"><?php echo "Services"; ?></h3>
                                        <small class="text-white/60">Available Services</small>
                                    </div>
                                </div>

                                <!-- Right: Number -->
                                <div class="text-end">
                                    <h2 class="mb-0 fw-bold">5</h2>
                                    <small class="text-white/60">Total</small>
                                </div>

                            </div>
                        </a>
                    </div>

                    <!-- News -->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <a href="news.php" class="text-decoration-none">
                            <div class="white-box analytics-info d-flex align-items-center justify-content-between p-4 rounded-2xl shadow-xl" style="background:#121332; color:#fdbb00;">

                                <div class="d-flex align-items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#fdbb00" viewBox="0 0 24 24">
                                        <path d="M19 4h-1V2h-2v2H8V2H6v2H5a2 2 0 0 0-2 2v16h18V6a2 2 0 0 0-2-2zM5 20V9h14v11H5z" />
                                        <path d="M7 11h5v5H7z" />
                                    </svg>
                                    <div>
                                        <h3 class="box-title mb-0">News</h3>
                                        <small class="text-white/60">Published News</small>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <h2 class="mb-0 fw-bold">2</h2>
                                    <small class="text-white/60">Total</small>
                                </div>

                            </div>
                        </a>
                    </div>

                    <!-- Team Members -->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <a href="team.php" class="text-decoration-none">
                            <div class="white-box analytics-info d-flex align-items-center justify-content-between p-4 rounded-2xl shadow-xl" style="background:#121332; color:#fdbb00;">

                                <div class="d-flex align-items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#fdbb00" viewBox="0 0 24 24">
                                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                    </svg>
                                    <div>
                                        <h3 class="box-title mb-0">Team</h3>
                                        <small class="text-white/60">Team Members</small>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <h2 class="mb-0 fw-bold">8</h2>
                                    <small class="text-white/60">Total</small>
                                </div>

                            </div>
                        </a>
                    </div>

                    <!-- Clients -->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <a href="clients.php" class="text-decoration-none">
                            <div class="white-box analytics-info d-flex align-items-center justify-content-between p-4 rounded-2xl shadow-xl" style="background:#121332; color:#fdbb00;">

                                <div class="d-flex align-items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#fdbb00" viewBox="0 0 24 24">
                                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                                    </svg>
                                    <div>
                                        <h3 class="box-title mb-0">Clients</h3>
                                        <small class="text-white/60">Active Clients</small>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <h2 class="mb-0 fw-bold">2</h2>
                                    <small class="text-white/60">Total</small>
                                </div>

                            </div>
                        </a>
                    </div>

                    <!-- Homepage Sliders -->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <a href="sliders.php" class="text-decoration-none">
                            <div class="white-box analytics-info d-flex align-items-center justify-content-between p-4 rounded-2xl shadow-xl" style="background:#121332; color:#fdbb00;">

                                <div class="d-flex align-items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#fdbb00" viewBox="0 0 24 24">
                                        <path d="M4 4h16v4H4zm0 6h16v4H4zm0 6h16v4H4z" />
                                    </svg>
                                    <div>
                                        <h3 class="box-title mb-0">Sliders</h3>
                                        <small class="text-white/60">Homepage Slides</small>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <h2 class="mb-0 fw-bold">3</h2>
                                    <small class="text-white/60">Total</small>
                                </div>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <?php include('footer.php'); ?>

    </div>
    </div>

    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>
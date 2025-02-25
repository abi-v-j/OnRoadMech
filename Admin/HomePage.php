<?php session_start();?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../Assets/Templates/Admin/assets/images/favicon.png">
    <title>Admin Mech Finder</title>
    <!-- Custom CSS -->
    <link href="../Assets/Templates/Admin/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../Assets/Templates/Admin/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../Assets/Templates/Admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../Assets/Templates/Admin/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1"><?php echo $_SESSION["aname"]?></h3>
                     
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                   <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                       <!-- <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>-->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="../Assets/Templates/Admin/assets/images/users/mechfinder.png" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark"><?php echo $_SESSION["aname"]; ?></span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                           <!-- <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="credit-card"
                                        class="svg-icon mr-2 ml-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="mail"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-3"><a href="javascript:void(0)" class="btn btn-sm btn-info">View
                                        Profile</a></div>
                            </div>-->
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
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="HomePage.php"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Components</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="#"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Location </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="DistrictDetails.php" class="sidebar-link"><span
                                            class="hide-menu"> District
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="PlaceDetails.php" class="sidebar-link"><span
                                            class="hide-menu"> Place
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="Location.php" class="sidebar-link"><span
                                            class="hide-menu"> Location
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="#
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Types </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="Brand.php" class="sidebar-link"><span
                                            class="hide-menu"> Brand
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="Category.php" class="sidebar-link"><span
                                            class="hide-menu"> Category
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="Subcategory.php" class="sidebar-link"><span
                                            class="hide-menu">
                                            Subcategory
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="Model.php" class="sidebar-link"><span
                                            class="hide-menu">
                                           Model
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="Specification.php" class="sidebar-link"><span
                                            class="hide-menu">
                                            Specification
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="ComplaintType.php" class="sidebar-link"><span
                                            class="hide-menu">
                                           ComplaintType
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span
                                    class="hide-menu">company Verification</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="companyVerification.php" class="sidebar-link"><span
                                            class="hide-menu"> company List
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="companyAcceptedList.php" class="sidebar-link"><span
                                            class="hide-menu"> Accepted
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="companyRejectedList.php" class="sidebar-link"><span
                                            class="hide-menu">
                                            Rejected
                                        </span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span
                                    class="hide-menu">Request</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="ViewRequest.php" class="sidebar-link"><span
                                            class="hide-menu"> Request List
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="AcceptedRequest.php" class="sidebar-link"><span
                                            class="hide-menu"> Accepted
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="RejectedRequest.php" class="sidebar-link"><span
                                            class="hide-menu">
                                            Rejected
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                      
                        </li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="ViewComplaint.php"
                                aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span
                                    class="hide-menu">Complaint</span></a></li>
   
                        
                         <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="Report.php"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Report</span></a></li>
                                    
                                     <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="ViewFeedback.php"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">View Feedback</span></a></li>
                        <li class="list-divider"></li>
                              
                               
                               
                               <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../Guest/Login.php"
                                aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
           
            
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
           
                <!-- *************************************************************** -->
                
                <img src="../Assets/Templates/Admin/assets/images/users/car.jpg" width="100%" alt="user" >
                
                <!-- *************************************************************** -->
           
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                All Rights Reserved by Adminmart. Designed and Developed by MechFinder.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../Assets/Templates/Admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../Assets/Templates/Admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../Assets/Templates/Admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../Assets/Templates/Admin/dist/js/app-style-switcher.js"></script>
    <script src="../Assets/Templates/Admin/dist/js/feather.min.js"></script>
    <script src="../Assets/Templates/Admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../Assets/Templates/Admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../Assets/Templates/Admin/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../Assets/Templates/Admin/assets/extra-libs/c3/d3.min.js"></script>
    <script src="../Assets/Templates/Admin/assets/extra-libs/c3/c3.min.js"></script>
    <script src="../Assets/Templates/Admin/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../Assets/Templates/Admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../Assets/Templates/Admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../Assets/Templates/Admin/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../Assets/Templates/Admin/dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="<?= base_url('/assets/css/bootstrap.min.css') ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('/assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('/assets/css/app.min.css') ?>" id="app-style" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="<?= base_url('/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?= base_url('/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') ?>" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="<?= base_url('/assets/libs/dropzone/min/dropzone.min.css') ?>" rel="stylesheet" type="text/css" />


</head>

<body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="<?= base_url('/assets/images/smk.png') ?>" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url('/assets/images/smk.png') ?>" alt="" height="17">
                            </span>
                        </a>

                        <a href="#" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="<?= base_url('/assets/images/smk.png') ?>" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url('/assets/images/smk.png') ?>" alt="" height="19">
                                <b class="ms-2 text-white">SMK MA'ARIF NU TIRTO</b>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="me-auto ms-4">
                    <h4>Sistem Pemakaian Lab</h4>
                </div>
                <div class="d-flex">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="<?= base_url('/assets/images/smk.png') ?>" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1">SMK Ma'arif NU Tirto</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item text-danger" href="<?= base_url('admin/logout') ?>"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>
                        <li>
                            <a href="<?= base_url('admin') ?>" class="waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">Dashboards</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/data_siswa') ?>" class="waves-effect">
                                <i class="bx bx-user"></i>
                                <span key="t-dashboards">Data Siswa</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/laporan_pemakaian') ?>" class="waves-effect">
                                <i class="bx bx-book-bookmark"></i>
                                <span key="t-dashboards">Laporan Pemakaian</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <?= $this->renderSection('content'); ?>
                </div>
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © SMK Ma'arif NU Tirto.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Febiadi Wisnu Akbar
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="<?= base_url('/assets/images/layouts/layout-1.jpg') ?>" class="img-thumbnail" alt="layout images">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="<?= base_url('/assets/images/layouts/layout-2.jpg') ?>" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="<?= base_url('/assets/images/layouts/layout-3.jpg') ?>" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>

                <div class="mb-2">
                    <img src="<?= base_url('/assets/images/layouts/layout-4.jpg') ?>" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                    <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                </div>


            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="<?= base_url('/assets/libs/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- <script src="<?= base_url() ?>/assets/libs/metismenu/metisMenu.min.js"></script> -->
    <script src="<?= base_url('/assets/libs/simplebar/simplebar.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/node-waves/waves.min.js') ?>"></script>

    <!-- apexcharts -->
    <script src="<?= base_url('/assets/libs/apexcharts/apexcharts.min.js') ?>"></script>

    <!-- dashboard init -->
    <script src="<?= base_url('/assets/js/pages/dashboard.init.js') ?>"></script>

    <!-- App js -->
    <script src="<?= base_url('/assets/js/app.js') ?>"></script>
    <!-- Required datatable js -->
    <script src="<?= base_url('/assets/libs/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <!-- Buttons examples -->
    <script src="<?= base_url('/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/jszip/jszip.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/pdfmake/build/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/pdfmake/build/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') ?>"></script>

    <!-- Responsive examples -->
    <script src="<?= base_url('/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') ?>"></script>

    <!-- Datatable init js -->
    <script src="<?= base_url('/assets/js/pages/datatables.init.js') ?>"></script>
    
    <!-- Plugins js -->
    <script src="<?= base_url('/assets/libs/dropzone/min/dropzone.min.js') ?>"></script>

    <!-- Chartjs -->
    <script src="<?= base_url('/assets/js/chart.js') ?>"></script>
</body>


<!-- Mirrored from themesbrand.com/skote-django/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Mar 2023 02:14:07 GMT -->

</html>
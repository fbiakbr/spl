<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote-django/layouts/pages-timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Mar 2023 02:15:02 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title><?= $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- owl.carousel css -->
        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.carousel.min.css">

        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.theme.default.min.css">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper" class="">
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
                    <div class="container mt-4">
                        <div class="row text-center">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="<?= base_url() ?>/assets/images/smk.png">
                                        <h4 class="card-title mt-3">Sistem Pemakaian Lab SMK Ma'arif NU Tirto</h4>
                                        <p class="card-text">Selamat Datang di Sistem Pemakaian Lab SMK Ma'arif NU Tirto</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title text-center mt-3 mb-5">Alur Sistem Pemakaian Lab SMK Ma'arif NU Tirto</h4>
                                        <div class="hori-timeline">
                                            <div class="owl-carousel owl-theme navs-carousel events" id="timeline-carousel">
                                                <div class="item event-list">
                                                    <div>
                                                        <div class="event-date">
                                                            <div class="text-primary mb-1">I</div>
                                                            <h5 class="mb-4">Input NIS</h5>
                                                        </div>
                                                        <div class="event-down-icon">
                                                            <i class="bx bx-pencil h1 text-primary down-arrow-icon"></i>
                                                        </div>
                                                        <div class="mt-3 px-3">
                                                            <p class="text-muted">
                                                                <span class="text-primary">NIS</span> adalah Nomor Induk Siswa yang tertera pada kartu siswa.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item event-list">
                                                    <div>
                                                        <div class="event-date">
                                                            <div class="text-primary mb-1">II</div>
                                                            <h5 class="mb-4">
                                                                Cek Data Diri
                                                            </h5>
                                                        </div>
                                                        <div class="event-down-icon">
                                                            <i class="bx bx-check-double h1 text-primary down-arrow-icon"></i>
                                                        </div>
                                                        <div class="mt-3 px-3">
                                                            <p class="text-muted">
                                                                Pastikan data diri yang tertera sudah benar.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item event-list">
                                                    <div>
                                                        <div class="event-date">
                                                            <div class="text-primary mb-1">III</div>
                                                            <h5 class="mb-4">
                                                                Pilih Lab
                                                            </h5>
                                                        </div>
                                                        <div class="event-down-icon">
                                                            <i class="bx bx-select-multiple h1 text-primary down-arrow-icon"></i>
                                                        </div>
                                                        <div class="mt-3 px-3">
                                                            <p class="text-muted">
                                                                Pilih lab yang digunakan untuk kegiatan praktikum.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item event-list">
                                                    <div>
                                                        <div class="event-date">
                                                            <div class="text-primary mb-1">IV</div>
                                                            <h5 class="mb-4">
                                                                Input Nomor PC
                                                            </h5>
                                                        </div>
                                                        <div class="event-down-icon">
                                                            <i class="bx bx-command h1 text-primary down-arrow-icon"></i>
                                                        </div>
                                                        <div class="mt-3 px-3">
                                                            <p class="text-muted">
                                                                Input nomor PC yang digunakan untuk praktikum.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item event-list">
                                                    <div>
                                                        <div class="event-date">
                                                            <div class="text-primary mb-1">V</div>
                                                            <h5 class="mb-4">
                                                                Input Materi Praktikum
                                                            </h5>
                                                        </div>
                                                        <div class="event-down-icon">
                                                            <i class="bx bx-list-ul h1 text-primary down-arrow-icon"></i>
                                                        </div>
                                                        <div class="mt-3 px-3">
                                                            <p class="text-muted">
                                                                Input materi praktikum yang akan dilakukan.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item event-list">
                                                    <div>
                                                        <div class="event-date">
                                                            <div class="text-primary mb-1">VI</div>
                                                            <h5 class="mb-4">
                                                                Submit Data
                                                            </h5>
                                                        </div>
                                                        <div class="event-down-icon">
                                                            <i class="bx bxl-telegram h1 text-primary down-arrow-icon"></i>
                                                        </div>
                                                        <div class="mt-3 px-3">
                                                            <p class="text-muted">
                                                                Pastikan data yang akan diinput sudah benar sebelum di submit.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                
                <!-- End Page-content -->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- owl.carousel js -->
        <script src="assets/libs/owl.carousel/owl.carousel.min.js"></script>

        <!-- timeline init js -->
        <script src="assets/js/pages/timeline.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote-django/layouts/pages-timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Mar 2023 02:15:02 GMT -->
</html>

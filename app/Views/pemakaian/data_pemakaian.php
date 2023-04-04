<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/libs/%40chenfengyuan/datepicker/datepicker.min.css">
    <!-- Icons Css -->
    <link href="<?= base_url() ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url() ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="<?= base_url() ?>/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?= base_url() ?>/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-layout-mode="light">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="container mt-3">
            <div class="row d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Data Pemakaian Lab Tanggal <span id="tgl"></span></h4>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-centered table-nowrap mb-0 dt-responsive  nowrap w-100">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">NIS</th>
                                            <th scope="col">Nama Siswa</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Jam</th>
                                            <th scope="col">Lab</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($pemakaian as $p) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $p['nis'] ?></td>
                                                <td><?= $p['nama_siswa'] ?></td>
                                                <td><?= $p['kelas'] ?></td>
                                                <td><?= date('d F Y', strtotime($p['tanggal'])) ?></td>
                                                <td><?= $p['jam'] ?></td>
                                                <td><?= $p['lab'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
        </div> <!-- container -->
    </div>
    <!-- END layout-wrapper -->

    <script>
        var tgl = document.getElementById('tgl');
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
        // month alias in indonesia
        var monthAlias = {
            1: 'Januari',
            2: 'Februari',
            3: 'Maret',
            4: 'April',
            5: 'Mei',
            6: 'Juni',
            7: 'Juli',
            8: 'Agustus',
            9: 'September',
            10: 'Oktober',
            11: 'November',
            12: 'Desember'
        };
        tgl.innerHTML = day + ' ' + monthAlias[month] + ' ' + year;
    </script>
    <!-- JAVASCRIPT -->
    <script src="<?= base_url('assets/libs/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/metismenu/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/simplebar/simplebar.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/node-waves/waves.min.js') ?>"></script>

    <script src="<?= base_url('assets/js/app.js') ?>"></script>
    <!-- JAVASCRIPT -->
    <script src="<?= base_url('assets/libs/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/metismenu/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/simplebar/simplebar.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/node-waves/waves.min.js') ?>"></script>

    <script src="<?= base_url('assets/libs/select2/js/select2.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/spectrum-colorpicker2/spectrum.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/%40chenfengyuan/datepicker/datepicker.min.js') ?>"></script>

    <!-- form advanced init -->
    <script src="<?= base_url('assets/js/pages/form-advanced.init.js') ?>"></script>

    <script src="<?= base_url('assets/js/app.js') ?>"></script>
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

</body>

<!-- Mirrored from themesbrand.com/skote-django/layouts/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Mar 2023 02:15:09 GMT -->

</html>
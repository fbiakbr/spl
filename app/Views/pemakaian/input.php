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
    <link href="<?= base_url() ?>assets/css/sweetalert2.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-layout-mode="light">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <img src="<?= base_url() ?>assets/images/smk.png" alt="">
                            </div>
                            <h4 class="card-title mt-3 mb-4 text-center">Input Data Pemakaian Lab</h4>
                            <form method="post" action="<?= base_url() ?>pemakaian/save">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="nis" class="form-label">NIS</label>
                                            <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS" required>
                                            <small id="nisHelp" class="form-text text-muted">Contoh : 4676</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nama_siswa" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Masukkan Nama" required readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="kelas" class="form-label">Kelas</label>
                                            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan Kelas" readonly required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Tanggal</label>
                                            <input type="text" class="form-control tanggal" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal" readonly required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Jam</label>
                                            <input type="text" class="form-control jam" id="jam" name="jam" placeholder="00:00:00" readonly required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="lab" class="form-label">Lab</label>
                                            <select class="form-select" aria-label="Default select example" id="lab" name="lab" required>
                                                <option value="">Pilih Lab</option>
                                                <option value="Lab TKJ L6">Lab TKJ L6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="no_pc" class="form-label">No PC</label>
                                            <input type="text" class="form-control" id="no_pc" name="no_pc" placeholder="Masukkan No PC" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="materi_praktek" class="form-label">Materi Praktikum</label>
                                            <textarea class="form-control" id="kegiatan" name="materi_praktek" rows="3" placeholder="Materi Praktikum" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </form>
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
        // Set Date and Time
        var date = new Date();
        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();
        var fullDate = year + "-" + month + "-" + day;
        document.querySelector(".tanggal").value = fullDate;
        setInterval(function() {
            var date = new Date();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var seconds = date.getSeconds();
            var fullTime = hours + ":" + minutes + ":" + seconds;
            document.querySelector(".jam").value = fullTime;
        }, 1000);

        const dataSiswa = <?= json_encode($siswa) ?>;
        // console.log(dataSiswa);
        const nis = document.querySelector("#nis");
        const namaSiswa = document.querySelector("#nama_siswa");
        const kelas = document.querySelector("#kelas");
        nis.addEventListener("keyup", function() {
            const nisValue = nis.value;
            const dataSiswaFiltered = dataSiswa.filter(function(siswa) {
                return siswa.nis == nisValue;
            });
            if (dataSiswaFiltered.length > 0) {
                namaSiswa.value = dataSiswaFiltered[0].nama_siswa;
                kelas.value = dataSiswaFiltered[0].kelas;
            } else {
                namaSiswa.value = "";
                kelas.value = "";
            }
        });
        const form = document.querySelector("form");
        form.addEventListener("submit", function(e) {
            if (nis.value == "" || namaSiswa.value == "" || kelas.value == "") {
                e.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'NIS tidak ditemukan!',
                })
            } else {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Data berhasil ditambahkan!',
                })
            }
        });
    </script>
    <!-- JAVASCRIPT -->
    <script src="<?= base_url() ?>assets/libs/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/node-waves/waves.min.js"></script>

    <script src="<?= base_url() ?>assets/js/app.js"></script>
    <!-- JAVASCRIPT -->
    <script src="<?= base_url() ?>assets/libs/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/node-waves/waves.min.js"></script>

    <script src="<?= base_url() ?>assets/libs/select2/js/select2.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/%40chenfengyuan/datepicker/datepicker.min.js"></script>

    <!-- form advanced init -->
    <script src="<?= base_url() ?>assets/js/pages/form-advanced.init.js"></script>

    <script src="<?= base_url() ?>assets/js/app.js"></script>
    <script src="<?= base_url() ?>assets/js/sweetalert2.all.min.js"></script>

</body>

<!-- Mirrored from themesbrand.com/skote-django/layouts/form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Mar 2023 02:15:09 GMT -->

</html>
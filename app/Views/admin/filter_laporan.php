<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?php if (session()->getFlashdata('message')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('message'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <h4 class="card-title">Filter Tanggal Laporan</h4>
                <div class="row">
                    <div class="col-md-2 mb-2">
                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                    </div>
                </div>
                <table id="datatable-buttons" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>NIS</td>
                            <td>Nama Siswa</td>
                            <td>Kelas</td>
                            <td>Tanggal</td>
                            <td>Jam</td>
                            <td>Lab</td>
                            <td>No PC</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<script>
    function showConfirm() {
        if (!confirm("Apakah anda yakin ingin menghapus data ini?")) {
            event.preventDefault();
        }
    }

    var data = <?= json_encode($pemakaian); ?>;
    // console.log(data);

    const tanggal = document.getElementById('tanggal');
    tanggal.addEventListener('change', function() {
        const filterData = data.filter(function(item) {
            return item.tanggal == tanggal.value;
        });
        let html = '';
        let no = 1;
        filterData.forEach(function(item) {
            html += `
                <tr>
                    <td>${no++}</td>
                    <td>${item.nis}</td>
                    <td>${item.nama_siswa}</td>
                    <td>${item.kelas}</td>
                    <td>${item.tanggal}</td>
                    <td>${item.jam}</td>
                    <td>${item.lab}</td>
                    <td>${item.no_pc}</td>
                    <td style="width: 10px;">
                        <a href="<?= base_url('admin/edit_pemakaian/') ?>${item.id_pemakaian}" class="btn btn-warning"><i class="bx bx-edit"></i></a>
                        <a href="<?= base_url('admin/hapus_pemakaian/') ?>${item.id_pemakaian}" class="btn btn-danger" onclick="showConfirm()"><i class="bx bx-trash"></i></a>
                    </td>
                </tr>
            `;
        });
        document.querySelector('tbody').innerHTML = html;
    });
</script>
<?= $this->endSection() ?>
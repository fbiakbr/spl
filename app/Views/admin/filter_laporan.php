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
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
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
                            <td>Nama Guru</td>
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
    // get data by date
    tanggal.addEventListener('change', function() {
        const tgl = this.value;
        // console.log(tgl);
        const filtered = data.filter(d => d.tanggal == tgl);
        // console.log(filtered);
        let html = '';
        let no = 1;
        filtered.forEach(f => {
            html += `
                <tr>
                    <td>${no++}</td>
                    <td>${f.nis}</td>
                    <td>${f.nama_siswa}</td>
                    <td>${f.kelas}</td>
                    <td>${f.tanggal}</td>
                    <td>${f.jam}</td>
                    <td>${f.lab}</td>
                    <td>${f.no_pc}</td>
                    <td>${f.nama_guru}</td>
                </tr>
            `;
        });
        document.querySelector('tbody').innerHTML = html;
        // reset tanggal value if filtered is empty
        if (filtered.length == 0) {
            this.value = '';
        }
    });
</script>
<?= $this->endSection() ?>
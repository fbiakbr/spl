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
                <h4 class="card-title">Laporan Pemakaian</h4>
                <!-- <a href="<?= base_url('admin/cetak_pemakaian') ?>" class="btn btn-primary mb-3">Cetak Data</a> -->
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
                        <?php $no = 1; ?>
                        <?php foreach ($pemakaian as $p) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $p['nis']; ?></td>
                                <td><?= $p['nama_siswa']; ?></td>
                                <td><?= $p['kelas']; ?></td>
                                <td><?= date('d F Y', strtotime($p['tanggal'])); ?></td>
                                <td><?= $p['jam']; ?></td>
                                <td><?= $p['lab']; ?></td>
                                <td><?= $p['no_pc']; ?></td>
                                <td style="width: 10px;">
                                    <a href="<?= base_url('admin/edit_pemakaian/' . $p['id_pemakaian']) ?>" class="btn btn-warning"><i class="bx bx-edit"></i></a>
                                    <a href="<?= base_url('admin/hapus_pemakaian/' . $p['id_pemakaian']) ?>" class="btn btn-danger" onclick="showConfirm()"><i class="bx bx-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
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
</script>
<?= $this->endSection() ?>
<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('success'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <h4 class="card-title">Data Siswa</h4>
                <a href="<?= base_url('admin/tambah_siswa') ?>" class="btn btn-primary mb-3">Tambah Data</a>
                <a href="<?= base_url('admin/import_siswa') ?>" class="btn btn-success mb-3">Import Excel</a>
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>NIS</td>
                            <td>Nama Siswa</td>
                            <td>Kelas</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($siswa as $s) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $s['nis']; ?></td>
                                <td><?= $s['nama_siswa']; ?></td>
                                <td><?= $s['kelas']; ?></td>
                                <td style="width: 10px;">
                                    <a href="<?= base_url('admin/edit_siswa/' . $s['nis']) ?>" class="btn btn-warning"><i class="bx bx-edit"></i></a>
                                    <a href="<?= base_url('admin/hapus_siswa/' . $s['nis']) ?>" class="btn btn-danger"><i class="bx bx-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<?= $this->endSection() ?>
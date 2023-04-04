<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

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
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<script>
    
</script>
<?= $this->endSection() ?>
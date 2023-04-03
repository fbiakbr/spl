<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Siswa</h4>
                <form action="<?= base_url() ?>admin/save_siswa" method="post">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="nis">NIS</label>
                            <input type="text" name="nis" id="nis" class="form-control" placeholder="Masukkan NIS" value="<?= $siswa['nis'] ?>" readonly required>
                            <small>Contoh: 1234</small>
                            <div class="invalid-feedback">

                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="nis">Nama Siswa</label>
                            <input type="text" name="nama_siswa" id="nama"  class="form-control" placeholder="Masukkan Nama" value="<?= $siswa['nama_siswa'] ?>" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="nis">Kelas</label>
                            <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Masukkan Kelas" value="<?= $siswa['kelas'] ?>" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<?= $this->endSection() ?>
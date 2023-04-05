<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Pemakaian</h4>
                <form action="<?= base_url() ?>admin/update_pemakaian/<?= $pemakaian['id_pemakaian'] ?>" method="post">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="nis">NIS</label>
                            <input type="text" name="nis" id="nis" class="form-control" placeholder="Masukkan NIS" value="<?= $pemakaian['nis'] ?>" readonly required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="nis">Nama Siswa</label>
                            <input type="text" name="nama_siswa" id="nama" class="form-control" placeholder="Masukkan Nama" value="<?= $pemakaian['nama_siswa'] ?>" readonly required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="nis">Kelas</label>
                            <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Masukkan Kelas" value="<?= $pemakaian['kelas'] ?>" readonly required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="nis">Tanggal</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Masukkan Tanggal" value="<?= $pemakaian['tanggal'] ?>" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="nis">Jam</label>
                            <input type="text" name="jam" id="jam" class="form-control" placeholder="Masukkan Tanggal" value="<?= $pemakaian['jam'] ?>" required>
                            <small>
                                Pastikan format jam sesuai.
                            </small>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="nis">Lab</label>
                            <select class="form-select" aria-label="Default select example" id="lab" name="lab" required>
                                <option value="">Pilih Lab</option>
                                <option value="Lab TKJ L6">Lab TKJ L6</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="no_pc" class="form-label">No PC</label>
                                <input type="text" class="form-control" id="no_pc" name="no_pc" placeholder="Masukkan No PC" value="<?= $pemakaian['no_pc'] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="materi_praktek" class="form-label">Materi Praktikum</label>
                                <textarea class="form-control" id="kegiatan" name="materi_praktek" rows="3" placeholder="Materi Praktikum" required><?= $pemakaian['materi_praktek'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<?= $this->endSection() ?>
<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Import Excel Data Siswa</h4>
                <p class="card-title-desc text-danger">
                    *Pastikan NIS yang diimport tidak ada yang sama dengan yang sudah ada di database.<br>
                    *Apabila NIS yang diimport sudah ada di database, maka data akan diupdate.<br>
                    *Pastikan file yang diupload sesuai dengan format yang telah ditentukan.
                </p>
                <a href="<?= base_url() ?>admin/download_format_siswa" class="btn btn-dark mb-3">Download Format Data Siswa</a>
                <div>
                    <form action="<?= base_url() ?>admin/save_import_siswa" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="excel">File Excel</label>
                                <input type="file" name="excel" id="excel" class="form-control" required>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<?= $this->endSection() ?>
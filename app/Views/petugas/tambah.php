<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<form action="/petugas/save" method="post">
    <?= csrf_field(); ?>
    <?php $errors = session()->getFlashdata('errors'); ?>
    <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $field => $error) : ?>
                <p><?= $error ?></p>
            <?php endforeach ?>
        </div>
    <?php endif ?>
    <div class="container">
        <div class="align-items-center">
            <div class="col-3">
                <label for="nama petugas" class="col-form-label">Nama Petugas</label>
            </div>
            <div class="col-3">
                <input type="text" id="nama_petugas" class="form-control" name="nama_petugas" autofocus>
            </div>
        </div>
        <div class="align-items-center">
            <div class="col-3">
                <label for="alamat" class="col-form-label">Alamat</label>
            </div>
            <div class="col-3">
                <input type="text" id="alamat" class="form-control" name="alamat">
            </div>
        </div>
        <div class="align-items-center">
            <div class="col-3">
                <label for="jabatan" class="col-form-label">Posisi</label>
            </div>
            <div class="col-3">
                <input type="text" id="jabatan" class="form-control" name="jabatan">
            </div>
        </div>
        <button type="submit" id="simpan1">Simpan</button>
    </div>
</form>
<?= $this->endSection(); ?>
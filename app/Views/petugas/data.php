<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<button class="button-1"><a href="/petugas/tambah"><i class="fas fa-user-plus"></i></a></button>
<table class="table table-s">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Petugas</th>
            <th scope="col">Alamat</th>
            <th scope="col">Posisi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($petugas as $p) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $p['nama_petugas']; ?></td>
                <td><?= $p['alamat']; ?></td>
                <td><?= $p['jabatan']; ?></td>
                <td><a href="/petugas/delete/<?= $p['id_petugas']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    <a href="" class="btn btn-info"><i class="fas fa-edit"></i></a>
                    <a href="" class="btn btn-warning"><i class="fas fa-info-circle"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?= $this->endSection(); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <h1 class="mt-2">Daftar Loket</h1>
            <a href="/loket/create/" class="btn btn-primary mb-3">Tambah Loket</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Pelayanan_id</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($loket as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $k['nama']; ?></td>
                            <td><?= $k['keterangan']; ?></td>
                            <td><?= $k['pelayanan_id']; ?></td>
                            <td>
                               <a href="/loket/edit/<?= $k['id']; ?>" class="btn btn-warning">EDIT </a>

<a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/loket/delete/' .$k['id']); ?>">Hapus</a>
                                    </td>
                        </tr>
                        <tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
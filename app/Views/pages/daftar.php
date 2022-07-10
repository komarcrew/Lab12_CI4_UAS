<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="section">
    <div class="container">

        <h1>Menu Antrian</h1>
        <div class="box">
            <div class="col-1">
                <a href="/pages/admin">
                    <p>Customer Service</p>
                </a>
            </div>
            <div class="col-2">
                <a href="#">
                    <p>Pengaduan</p>
                </a>
            </div>
            <p>Paragraf</p>
            <div class="col-3">
                <a href="#">
                    <p>Permohonan Baru</p>
                </a>
            </div>
            <div class="col-4">
                <a href="#">
                    <p>Perpanjangan</p>
                </a>
            </div>

    
        </div>
    </div>
    <br>
    <br>
    <?= $this->endSection(); ?>
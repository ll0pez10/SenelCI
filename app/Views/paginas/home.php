<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?> 
<?= $this->include('/components/banner') ?>
<main id="main">
    <?= $this->include('/components/us') ?>
    <?= $this->include('/components/trajetoria') ?>
    <?= $this->include('/components/missao') ?>
    <?= view_cell('\App\Libraries\Home::eventos') ?>
    <?= $this->include('/components/sponsor') ?>
</main><!-- End #main -->
<?= $this->endSection() ?>
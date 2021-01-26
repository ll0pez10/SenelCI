<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?> 
<!-- $this->include('/components/banner') -->
<main id="main" class="container">
    <?= $this->include('components/us') ?>
    <?= $this->include('components/trajetoria') ?>
    <?= $this->include('components/missao') ?>
    <?= $this->include('components/sponsor') ?>
</main><!-- End #main -->
<?= $this->endSection() ?>
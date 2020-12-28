<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?> 
<main id="main">
    <?= view_cell('\App\Libraries\Edicoes::eventos') ?>
    <?= view_cell('\App\Libraries\Edicoes::patrocinadores') ?>
    <?= view_cell('\App\Libraries\Edicoes::programacao') ?>
    <?= view_cell('\App\Libraries\Edicoes::depoimentos') ?>
    <?= view_cell('\App\Libraries\Edicoes::fotos') ?>
</main><!-- End #main -->
<?= $this->endSection() ?>
<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?> 
<main id="main">
    <?= view_cell('\App\Libraries\Edicoes::eventos', $id) ?>
    <?= view_cell('\App\Libraries\Edicoes::programacao', $ano) ?>
    <?= view_cell('\App\Libraries\Edicoes::patrocinadores', $ano) ?>
    <?= view_cell('\App\Libraries\Edicoes::depoimentos', $ano) ?>
    <?= view_cell('\App\Libraries\Edicoes::fotos', $ano) ?>
</main><!-- End #main -->
<?= $this->endSection() ?>
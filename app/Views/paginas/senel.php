<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?> 
<main id="main">
    <?= view_cell('\App\Libraries\Edicoes::eventos', ['evento_id' => 1]) ?>
    <?= view_cell('\App\Libraries\Edicoes::programacao', ['ano' => 2019]) ?>
    <?= view_cell('\App\Libraries\Edicoes::patrocinadores', ['ano' => 2019]) ?>
    <?= view_cell('\App\Libraries\Edicoes::depoimentos', ['ano' => 2019]) ?>
    <?= view_cell('\App\Libraries\Edicoes::fotos', ['ano' => 2019]) ?>
</main><!-- End #main -->
<?= $this->endSection() ?>
<div class= "row">
    <h3><?= $titulo ?></h3>
    <p><?= $descricao?></p>
    <?php foreach($categoria as $cat): ?>
        <div class="col">
            <img  src="<?= $logo ?>" alt="">
            <button type="button" class="btn btn-primary"> <?= $cat?></button>
        </div>
    <?php endforeach;?>
</div>
<h3>Nossos eventos</h3>
<div class="carousel">
    <?php foreach($evento as $event):?>
        <div class="row">
            <a href="/"><?= $evento_imagem ?></a>
            <div>
                <a href="/"><h2><?= $evento_nome ?></h2></a>
                <p><?= $evento_descricao ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
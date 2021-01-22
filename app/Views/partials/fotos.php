<div class="row">
    <?php foreach($fotos as $foto):?>
        <a href="<?= $caminho ?>">
            <img src="<?= $caminho ?>" class="img-fluid">
        </a>
    <?php endforeach; ?>
</div>

<script>
    $(this).ekkolightbox({
        loadingMessage: "Loading…",
        showArrows: true,
        leftArrow: "<<<",
        rightArrow: ">>>"
    });
</script>
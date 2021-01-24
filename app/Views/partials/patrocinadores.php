<div class= "row">
    <h3>Patrocinadores</h3>
    <div class="row">
        <?php foreach($patrocinadores as $sponsor):?>
        <div class="col-xs-1-12">
              <div class="card" style="width: 18rem;">
                <?php 
                  $imageProperties = [
                    'src' => $sponsor['logo'],
                    'alt' => $sponsor['nome'],
                    'class' => 'card-img-top'
                  ];

                  echo img($imageProperties);
                ?>
                <div class="card-body">
                  <h5 class="card-title"><?=$sponsor['nome']?></h5>
                  <?php if($sponsor['categoria'] == "Platina"):?>
                      <a href="#" class="btn btn-primary"><?= $sponsor['categoria']?></a>
                  <?php elseif($sponsor['categoria'] == "Ouro"):?>
                      <a href="#" class="btn btn-warning"><?= $sponsor['categoria']?></a>
                  <?php elseif($sponsor['categoria'] == "Prata"):?>
                      <a href="#" class="btn btn-secondary"><?= $sponsor['categoria']?></a>
                  <?php else:?>
                      <a href="#" class="btn btn-dark"><?= $sponsor['categoria']?></a>
                  <?php endif; ?>
                </div>
              </div>
                </div>
          <?php endforeach;?>
    </div>
</div>
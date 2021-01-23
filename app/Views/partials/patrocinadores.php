<div class= "row">
    <h3>Patrocinadores</h3>
    <div class="row">
        <?php foreach($patrocinadores as $sponsor):?>
            <div class="col-xs-1-12">
              <div class="card">
                <div class="card-body">
                  <img src="<?php [$sponsor['logo']]?>"  class = "card-img-top" alt="">
                  <h3 class="card-title"><?=$sponsor['nome']?></h3>
                  <?php if($sponsor['categoria'] == "Platina"):?>
                      <button type="button" class="btn btn-primary"></button>
                  <?php elseif($sponsor['categoria'] == "Ouro"):?>
                      <button type="button" class="btn btn-warning"></button>
                  <?php elseif($sponsor['categoria'] == "Prata"):?>
                      <button type="button" class="btn btn-secondary"></button>
                  <?php else:?>
                      <button type="button" class="btn btn-dark"></button>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach;?>
    </div>
</div>
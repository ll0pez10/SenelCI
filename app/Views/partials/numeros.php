<!-- Inicio "Nossos Número" -->
<section id="mu-counter" style='background-image: url("assets/images/kit_senel_botton.jpeg");'>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mu-counter-area">
					<h3>NOSSOS NÚMEROS</h3>
					<div class="mu-counter-block">
						<div class="row">
							<!-- inicio Instituições Impactada -->
							<div class="col-md-3 col-sm-6">
								<div class="mu-single-counter">
									<i class="iconify" data-icon="fa-solid:university" data-inline="false"
										style="color: white;" data-width="48" data-height="48"></i>
									<div class="counter-value" data-count="<?= $instituicoes ?>">0</div>
									<h5 class="mu-counter-name">Instituições Impactadas</h5>
								</div>
							</div>
							<!-- fim Instituições Impactada -->
							<!-- inicio Instituições Impactada -->
							<div class="col-md-3 col-sm-6">
								<div class="mu-single-counter">
									<i class="iconify" data-icon="ic:round-emoji-people" data-inline="false"
										style="color: white;" data-width="48" data-height="48"></i>
									<div class="counter-value" data-count="<?= $inscritos ?>">0</div>
									<h5 class="mu-counter-name">Inscritos</h5>
								</div>
							</div>
							<!-- fim Instituições Impactada -->
							<!-- inicio Palestras E Mesas Redondas -->
							<div class="col-md-3 col-sm-6">
								<div class="mu-single-counter">
									<i class="iconify" data-icon="ps:coffee-hot" data-inline="false"
										style="color: white;" data-width="48" data-height="48"></i>
									<div class="counter-value" data-count="<?= $palestras ?>">0</div>
									<h5 class="mu-counter-name">Palestras E Mesas Redondas</h5>
								</div>
							</div>
							<!-- fim Palestras E Mesas Redondas-->
							<!-- inicio Árvores Plantadas -->
							<?php if( $ano == "2019"):?>
							<div class="col-md-3 col-sm-6">
								<div class="mu-single-counter">
									<i class="iconify" data-icon="jam:tree-f" data-inline="false"
										style="color: white;" data-width="48" data-height="48"></i>
									<div class="counter-value" data-count="<?= $arvores ?>">0</div>
									<h5 class="mu-counter-name">Árvores Plantadas</h5>
								</div>
							</div>
							<?php endif;?>
							<!-- fim Árvores Plantadas-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- fim "Nossos Números" -->
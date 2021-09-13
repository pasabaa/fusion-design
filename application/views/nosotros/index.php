<div class="container my-4">
	<div class="row align-items-center">
		<div class="col-6">
			<h1 class="display-2 fw-bolder">Nosotros</h1>
			<h1 class="display-3 fw-bolder text-muted">Equipo Fusion Design</h1>
			<p>Conoce a los miembros del equipo.</p>
		</div>
		<div class="col-6">
			<div class="text-center">
				<img class="img-fluid" src="<?=base_url('assets/img/19.svg');?>" alt="">
			</div>
		</div>
	</div>

	<div class="row">
		<?php foreach($integrantes as $integrante):?>
		<div class="col-lg-4 col-md-6 col-12">
			<div class="card border-0 bg-light shadow-sm my-4">
				<div class="card-boody text-center p-2">
					<div class="my-4 text-center">
						<img class="img-fluid rounded-circle" width="164"
							src="<?=base_url('assets/img/team/'), $integrante->nombre;?>.jpg" alt="">
					</div>
					<div class="card-footer bg-gradient bg-indigo shadow-sm">
						<h5 class="fw-bolder text-white">
							<?=$integrante->nombre, " ", $integrante->apellidoP, " ", $integrante->apellidoM;?></h5>
						<p class="fw-bolder"><?=$integrante->rol;?></p>
					</div>


				</div>
			</div>
		</div>
		<?php endforeach?>
	</div>

</div>

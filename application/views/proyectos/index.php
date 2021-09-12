<div class="container my-4">
	<div class="row align-items-center">
		<div class="col-6">
			<h1 class="display-2 fw-bolder">Proyectos</h1>
			<h1 class="display-3 fw-bolder text-muted">Categorias</h1>
			<p>Listado de los categorias que tenemos disponibles.</p>
			<a href="<?=base_url();?>proyectos/listado" class="btn bg-indigo bg-gradient fw-bolder my-4 text-white">Proyectos disponibles</a>
		</div>
		<div class="col-6">
			<div class="text-center">
				<img class="img-fluid" src="<?=base_url('assets/img/16.svg');?>" alt="">
			</div>
		</div>
	</div>

	<div class="row justify-content-center my-4">
		<?php foreach($categorias as $categoria):?>
		<div class="col-lg-4 col-md-6 col-12 justify-content align-items-center my-2">
			<div class="card border-0 bg-light shadow-sm p-2">
				<div class="card-body">
					<h4 class="fw-bolder"><?=$categoria->nombreC;?></h4>
					<p><?=$categoria->descripcionC;?></p>
				</div>
			</div>
		</div>
		<?php endforeach?>
	</div>
</div>

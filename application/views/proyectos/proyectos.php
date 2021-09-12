<div class="container">
	<div class="row justify-content-center">
		<div class="col-6">
			<h1 class="display-2 fw-bolder">Proyectos</h1>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At minima, vitae deleniti asperiores
				perferendis quam laboriosam optio maiores iure quidem. Cupiditate facilis quaerat odio sunt, asperiores
				possimus culpa cumque quod.</p>
			<p>Voluptas, dolore cum quia vitae provident totam fugit voluptatum, ab tempora dolorem in dicta fuga
				aspernatur ut rerum reprehenderit. In, provident nostrum aliquid id facere ut delectus? Inventore,
				dolores ad!</p>
		</div>
		<div class="col-6">
			<div class="text-center">
				<img src="<?=base_url('assets/img/15.svg')?>" class="img-fluid" width="434" alt="">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<a class="btn btn-primary" href="<?=base_url();?>index.php/menu/formulario">Agregar</a>
		</div>
	</div>

	<div class="row my-4">
		<?php foreach($proyectos as $proyectos):?>
		<div class="col-4 justify-content align-items-center my-2">
			<div class="card border-0 bg-light p-2">
				<div class="card-body">
					<h4 class="fw-bolder"><?=$proyecto->nombreP;?></h4>
					<p class="text-muted"><?=$proyecto->categoria;?></p>
					<p><?=$proyecto->descripcionP;?></p>
					<p class="text-primary fw-bolder">Precio: 0$</p>
				</div>
			</div>
		</div>
		<?php endforeach?>
	</div>

</div>

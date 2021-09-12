<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">
	<script src="<?=base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
	<title><?=$title;?></title>
</head>
 
<body>
	<nav class="navbar navbar-expand-lg navbar-light fw-bolder p-4">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?=base_url('assets/img/brand/isotipo_negro.png')?>" class="img-fluid" width=34" alt=""></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>proyectos/">Proyectos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>">Nosotros</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

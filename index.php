<?php
	if (isset($_GET['page'])){
		$actual = $_GET['page'];

		if ($_GET['page'] == 1)
			$page = "restaurante.php";
		elseif ($_GET['page'] == 2)
			$page = "actividades.php";
		elseif ($_GET['page'] == 5)
			$page = "reserva.php";
		elseif ($_GET['page'] == 11)
			$page = "celebraciones.php";
		elseif ($_GET['page'] == 12)
			$page = "celebracion1.php";
	} else {
		$page = "restaurante.php";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ejercicio 44</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="Lato-Black.ttf">
	<link rel="stylesheet" type="text/css" href="font.ttf">
	<script src="scripts.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div id="wrapper" class="clearfix">
		<nav class="clearfix">
			<ul>
				<li><a href="?page=1">Restaurante</a></li
				><li><a href="?page=2">Actividades</a></li
				><li><a href="">Menús</a></li
				><li><a href="">Especialidades</a></li
				><li><a href="?page=5">Reservar Mesa</a></li
				><li><a href="">Dónde Estamos</a></li
			></ul>
			<div id="logo"><img src="logo.png"></div>
		</nav>
		<aside>
			<div id="a_gallery">
				<?php require_once ('a_gallery.php');?>
			</div>
			<div id="a_especialidad">
				<?php require_once ('a_especialidad.php');?>
			</div>
		</aside>
		<section id="content" >
			<?php require_once ($page);?>
		</section>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow" />
	<meta name="distribution" content="global" />
	<meta name="rating" content="general" />
	<meta name="language" content="es_ES" />
	<meta name="Title" content="Aconpy.com - Manual de Usuario">
	<title>Aconpy.com - Manual de Usuario</title>
	<meta name="description" content="Aconpy.com - Manual de Usuario" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--link rel="icon" type="images/png" href="images/icon.ico"-->
	<link rel="stylesheet" type="text/css" href="css/manual.css?v1">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
	<style>

	</style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124195393-6"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-124195393-6');
	</script>

</head>

<body>
	<?php
	require_once "Database.php";
	?>
	<main class=" manual sueldos">
		<div class="col-xs-12 col-md-12 offset-md-1 m-0 p-0">
			<div class="div_buscador">
				<div class="container position-relative">
					<div class="div_botones d-flex">
						<a class="btn_inicio sueldos" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
								<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
								<polyline points="9 22 9 12 15 12 15 22"></polyline>
							</svg></a>
						<div class="separador"><span>|</span></div>
						<a class="btn_volver sueldos" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
								<line x1="19" y1="12" x2="5" y2="12"></line>
								<polyline points="12 19 5 12 12 5"></polyline>
							</svg></a>
					</div>
				</div>
				<h3 class="" style="font-size: 2.5rem;">Centro de ayuda</h3>
				<p>Encontrá la solución escribiendo tu consulta en el buscador o seleccionando debajo por funcionalidad.</p>
				<form class="container position-relative" name="buscador" action="buscador-sueldos.php" method="POST">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search lupa_buscador">
						<circle cx="11" cy="11" r="8"></circle>
						<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
					</svg>
					<input id="input-search" autocomplete="off" type="text" name="criteria" class="buscador" placeholder="Escribí tu consulta...">
					<div class="searchable-container">
						<?php
						$db = Database::getInstance();
						$sql = "SELECT * FROM preguntas ORDER BY orden ASC";
						$stm = $db->query($sql);
						$categorias = $stm->fetchAll();
						foreach ($categorias as $row) {
						?>
							<div class="items" style="text-align: left; display:none">
								<b> <a style="color:black" href="pregunta-sueldos.php?pid=<?= $row["id"] ?>"><?= $row["pregunta"] ?></a></b>
							</div>
						<?php
						}
						?>
					</div>
				</form>
			</div>

			<p>Seleccioná una funcionalidad:</p>
			<div class="container d-flex" style="white-space: nowrap; flex-wrap: wrap;">
				<?php
				require_once "Database.php";
				$db = Database::getInstance();
				$sql = "SELECT * FROM categorias WHERE plataforma = 'sueldos' AND sub_categoria_id = 0 ORDER BY orden ASC";
				$stm = $db->query($sql);
				$categorias = $stm->fetchAll();
				foreach ($categorias as $row) {
				?>
					<span id="tag_<?= $row['id'] ?>" onclick="BuscarSubCategorias(<?= $row['id'] ?>, 3)" class="tags_topicos"><?= $row["topico"] ?></span>
				<?php
				}
				?>
			</div>
			<div class="mt-3 container" id="accordion">
			</div>
			<div class="contenedor_logo">
				<a href="/"><img src="img/logo_aconpy.svg" class="img-responsive logo mb-5" /></a>
			</div>
		</div>
	</main>

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/general.js"></script>
	<?php include_once 'chatjivo.php'; ?>
</body>

</html>
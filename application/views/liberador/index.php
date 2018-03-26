<!DOCTYPE html>
<html>
<head>
	<script>
		var base_url = '<?php echo base_url() ?>'
	</script>
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?php base_url() ?>../../css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php base_url() ?>../../css/jsgrid-theme.min.css"/>
	<link type="text/css" rel="stylesheet" href="<?php base_url() ?>../../css/jsgrid.min.css"/>
	<link type="text/css" rel="stylesheet" href="<?php base_url() ?>../../css/cpc.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php base_url() ?>../../css/sweetalert2.css"  media="screen,projection"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<title>CPC</title>
</head>

<body>
	<!-- ESTRUCTURA NAVBAR -->
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<a href="<?php base_url() ?>" class="brand-logo center">Control Procesos Calidad</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="#">Cerrar Sesión</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<div class="jsGrid" id="jsGrid">
	</div>

	<!-- <a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">add</i></a> -->

	<!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->
	<div id="modal1" class="modal">
		<div class="modal-content">
			<h4>Ingresa los datos del analisis</h4>
			<!-- <div class="container"> -->
				<table class="responsive-table highlight">
					<tbody>
						<tr>
							<div class="row">
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_locacion">
									<label for="icon_prefix">Locacion</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_articulo">
									<label for="icon_prefix">Articulo</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_fecha">
									<label for="icon_prefix">Fecha</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_lote">
									<label for="icon_prefix">Lote</label>
								</div>
							</div>
						</tr>
						<tr>
							<div class="row">
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_referencia">
									<label for="icon_prefix">Referencia</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_estado">
									<label for="icon_prefix">Estado</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_descripcion">
									<label for="icon_prefix">Descripcion</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_cliente">
									<label for="icon_prefix">Cliente</label>
								</div>
							</div>
						</tr>
						<tr>
							<div class="row">
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_nombre">
									<label for="icon_prefix">Nombre</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_cantidad">
									<label for="icon_prefix">Cantidad</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_um">
									<label for="icon_prefix">UM</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_ph">
									<label for="icon_prefix">PH</label>
								</div>
							</div>
						</tr>
						<tr>
							<div class="row">
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_brix">
									<label for="icon_prefix">Brix</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_cons5sec">
									<label for="icon_prefix">Cons5sec</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_cons30sec">
									<label for="icon_prefix">Cons30sec</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_acasc">
									<label for="icon_prefix">Acasc</label>
								</div>
							</div>
						</tr>
						<tr>
							<div class="row">
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_acidez">
									<label for="icon_prefix">Acidez</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_bar">
									<label for="icon_prefix">Bar</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_color">
									<label for="icon_prefix">Color</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_densidad">
									<label for="icon_prefix">Densidad</label>
								</div>
							</div>
						</tr>
						<tr>
							<div class="row">
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_pnegros">
									<label for="icon_prefix">Pnegros</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_patulina">
									<label for="icon_prefix">Patulina</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_ramacidos">
									<label for="icon_prefix">Ramacidos</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_hongos">
									<label for="icon_prefix">Hongos</label>
								</div>
							</div>
						</tr>
						<tr>
							<div class="row">
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_levadura">
									<label for="icon_prefix">Levadura</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_ecoli">
									<label for="icon_prefix">Ecoli</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_coliformes">
									<label for="icon_prefix">Coliformes</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_hongosterm">
									<label for="icon_prefix">HongosTerm</label>
								</div>
							</div>
						</tr>
						<tr>
							<div class="row">
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_salmonnela">
									<label for="icon_prefix">Salmonnela</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_alyciclo">
									<label for="icon_prefix">Alyciclo</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_howardm">
									<label for="icon_prefix">Howardm</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_generico_1">
									<label for="icon_prefix">Generico_1</label>
								</div>
							</div>
						</tr>
						<tr>
							<div class="row">
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_generico_2">
									<label for="icon_prefix">Generico_2</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_generico_3">
									<label for="icon_prefix">Generico_3</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_generico_4">
									<label for="icon_prefix">Generico_4</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_generico_5">
									<label for="icon_prefix">Generico_5</label>
								</div>
							</div>
						</tr>
						<tr>
							<div class="row">
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_generico_6">
									<label for="icon_prefix">Generico_6</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_generico_7">
									<label for="icon_prefix">Generico_7</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_generico_8">
									<label for="icon_prefix">Generico_8</label>
								</div>
								<div class="input-field col s3">
									<input id="icon_prefix" type="text" class="validate txt_generico_9">
									<label for="icon_prefix">Generico_9</label>
								</div>
							</div>
						</tr>
						<tr>
							<div class="row">
								<div class="input-field col s12">
									<input id="icon_prefix" type="text" class="validate txt_generico_10">
									<label for="icon_prefix">Generico_10</label>
								</div>
							</div>
						</tr>

					</tbody>
				</table>
			<!-- </div> -->

		</div>
		<div class="modal-footer fixed">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat btn_cancelar">Cancelar</a>
			<a href="#!" class="modal-action waves-effect waves-green btn-flat btn_ingresar">Ingresar analisis</a>
		</div>
	</div>

	<script type="text/javascript" src="<?php base_url() ?>../../js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>../../js/materialize.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>../../js/jsgrid.min.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>../../js/db.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>../../js/index.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>../../js/lib_liberar_j.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>../../js/sweetalert2.js"></script>

</body>
</html>

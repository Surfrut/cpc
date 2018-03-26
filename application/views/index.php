<!DOCTYPE html>
<html>
<head>
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/jsgrid-theme.min.css"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/jsgrid.min.css"/> -->
	<link type="text/css" rel="stylesheet" href="css/cpc.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/sweetalert2.css"  media="screen,projection"/>
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
				<!-- activate side-bav in mobile view -->
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<!-- navbar for mobile -->
				<ul class="side-nav" id="mobile-demo">
					<li><a href="#">Cerrar Sesión</a></li>
				</ul>
			</div>
		</nav>
	</div>


	<br>
	<div class="row botones">
		<a class="waves-effect waves-light btn btn_liberador"><i class="material-icons left">done_all</i>Liberador</a>
		<a class="waves-effect waves-light btn btn_analista"><i class="material-icons left">clear_all</i>Analista</a>
	</div>
	<div class="preloader">
		<div class="preloader-wrapper small active">
			<div class="spinner-layer spinner-blue">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="gap-patch">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>

			<div class="spinner-layer spinner-red">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="gap-patch">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>

			<div class="spinner-layer spinner-yellow">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="gap-patch">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>

			<div class="spinner-layer spinner-green">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="gap-patch">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<!-- <script type="text/javascript" src="js/jsgrid-script.js"></script> -->
	<script type="text/javascript" src="js/jsgrid.min.js"></script>
	<script>
		var base_url = '<?php echo base_url() ?>'
	</script>
	<script type="text/javascript" src="js/db.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<script type="text/javascript" src="js/sweetalert2.js"></script>
</body>
</html>
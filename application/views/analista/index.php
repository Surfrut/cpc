<!DOCTYPE html>
<html>
<head>
	<script>
		var base_url = '<?php echo base_url() ?>'
	</script>
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?php base_url() ?>../../css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php base_url() ?>../../css/jsgrid-theme.min.css"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/jsgrid.min.css"/> -->
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
				
				<a href="#" data-activates="mobile-demo" class="button-collapses"><i class="material-icons">menu</i></a>
				<ul id="nav-mobile" class="left hide-on-med-and-down">
					<li><a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="#">Cerrar Sesión</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<ul id="slide-out" class="side-nav">
		<li><div class="user-view">
			<div class="background">
				<img src="images/office.jpg">
			</div>
			<a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
			<a href="#!name"><span class="white-text name">John Doe</span></a>
			<a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
		</div></li>
		<li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
		<li><a href="#!">Second Link</a></li>
		<li><div class="divider"></div></li>
		<li><a class="subheader">Subheader</a></li>
		<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
	</ul>
	<!-- <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a> -->

	<div class="jsGrid" id="jsGrid">
		
	</div>

	<script type="text/javascript" src="<?php base_url() ?>../../js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>../../js/materialize.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>../../js/jsgrid.min.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>../../js/db.js"></script>
	<!-- <script type="text/javascript" src="<?php base_url() ?>../../js/index.js"></script> -->
	<script type="text/javascript" src="<?php base_url() ?>../../js/ana_analista_j.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>../../js/sweetalert2.js"></script>
	
</body>
</html>
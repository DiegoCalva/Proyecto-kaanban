<?php
    session_start();
    $varUsuario = $_SESSION['Usuario'];
    $varRol = $_SESSION['Rol'];
    if($varUsuario == null || $varUsuario == '' &&
    $varRol == null || $varRol == ''){
        echo 'No se ha loggeado';
        die();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Kaanbal Vocabulary</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button title="nav" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.html">Inicio</a></li>
					<li class="active"><a href="mainmenu.php">Aprende vocabulario</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $varUsuario ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="estadistica.php">Estadisticas</a></li>
							<?php
							if($varRol == 'ADMINISTRADOR'){
							 	echo "<li><a href='mod-usu.php'>Administrar usuario</a></li>";
								echo "<li><a href='mod-pal.php'>Administrar palabras</a></li>";
							}
							?>
							<li><a href="assets/php/logout.php">Cerrar Sesión</a></li>
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<main id="head">
		<div class="container">
			<h1 class="lead">Selección Múltiple</h1>
			<form method="POST" action="assets/php/temas_multiple.php" id="myForm">
			<div class="wrapper2">
					<button class="btnes fourth" name="Tema" value="computacion">Computación</button>
					<button class="btnes fourth" name="Tema" value="botánica">Botánica</button>
					<button class="btnes fourth" name="Tema" value="astrología">Astrología</button>
					<button class="btnes fourth" name="Tema" value="escuela">Escuela</button>
					<button class="btnes fourth" name="Tema" value="hogar">Hogar</button>
					<button class="btnes fourth" name="Tema" value="clima">Clima</button>
			</div>
			</form>
				<!-- <h2 class="lead">FAVORITOS</h2>
				<div class="wrapper2">
					<button class="btnes fourth">tema 1</button>
					<button class="btnes fourth">TEMA 2</button>
					<button class="btnes fourth">TEMA 3</button>
				</div> -->
		</div>
		<div class="container">
			<h1 class="lead">Traducción</h1>
			<form method="POST" action="assets/php/temas_traduccion.php" id="myForm">
			<div class="wrapper2">
					<button class="btnes fourth" name="Tema" value="computacion">Computación</button>
					<button class="btnes fourth" name="Tema" value="botánica">Botánica</button>
					<button class="btnes fourth" name="Tema" value="astrología">Astrología</button>
					<button class="btnes fourth" name="Tema" value="escuela">Escuela</button>
					<button class="btnes fourth" name="Tema" value="hogar">Hogar</button>
					<button class="btnes fourth" name="Tema" value="clima">Clima</button>
			</div>
			</form>
				<!-- <h2 class="lead">FAVORITOS</h2>
				<div class="wrapper2">
					<button class="btnes fourth">tema 1</button>
					<button class="btnes fourth">TEMA 2</button>
					<button class="btnes fourth">TEMA 3</button>
				</div> -->
		</div>
		<div class="container">
			<h1 class="lead">Expresiones</h1>
			<div class="wrapper2">
				<div></div>
				<a href="exercise3.php" class="btnes fourth">¡Jugar!</a>
				
			</div>
				<!-- <h2 class="lead">FAVORITOS</h2>
				<div class="wrapper2">
					<button class="btnes fourth">tema 1</button>
					<button class="btnes fourth">TEMA 2</button>
					<button class="btnes fourth">TEMA 3</button>
				</div> -->
		</div>
	</main>
	<!-- /Header -->

	<!-- /Highlights -->

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contacto</h3>
						<div class="widget-body">diegarma@hotmail.com</a><br>
						johanmg902@gmail.com</a><br>
						ariadna.phdez@gmail.com</a><br>
						brayanhdzlpz2000@gmail.com</a><br>
						
								<br>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Siguenos</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href="https://twitter.com/Brayanhl17"><i class="fa fa-twitter fa-2"></i></a>
								<a href="https://github.com/DiegoCalva"><i class="fa fa-github fa-2"></i></a>
								<a href="https://www.facebook.com/ariadna.perezhernandez"><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Terminos y condiciones</h3>
						<div class="widget-body">
							<p>"Este programa es público, ajeno a cualquier partido político. Queda prohibido el uso para fines distintos a los establecidos en el programa"</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
		</div>

	</footer>	

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	<script src="assets/js/mainmenu.js"></script>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" type="img/png" href="img/logowinecity.png"/>

<!-- Bootstrap CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--
<link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
-->
<link rel="stylesheet" href="css/estilo.css">

 <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous">
</script> 
<!--
 <script src="jquery/jquery.min.js"></script>
-->

<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<title>Wine City</title>
<link rel="icon" type="img/png" href="img/logowinecity.png"/>
</head>

<body id="pagina">
	<nav id="menu" class="menu navbar navbar-expand-md navbar-dark bg-dark ">

		<a id="inicio" class="navbar-brand pulse animated" href="#">
		<img class="img-fluid" alt="Wine City" src="img/wc0.png" onmouseout="this.src='img/wc0.png';" onmouseover="this.src='img/wc1.png';">
		</a>
		<hr>

	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  	</button>

		<div class="collapse navbar-collapse " id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  	<li><a id="bloque0" class="nav-link" href="#"> Wine City - Home</li></a>
			  	
			</ul>
			<ul class="nav navbar-nav navbar-right">

				<li><a id="facebook" class="redes nav-link"href="http://www.facebook.com/WineCityExperience" target="_blank"><img class="img-fluid" src="img/facebook.png"></a></li>
				<li><a id="instagram" class="redes  nav-link" href="https://www.instagram.com/winecityexperience" target="_blank"><img class="img-fluid" src="img/instagram.png"></a></li>
				<li><a id="you tube" class="redes  nav-link" href="https://www.youtube.com/channel/UCoDwQQxeKjMwyAbuP45uoIw" target="_blank"><img class="img-fluid" src="img/youtube.png"></a></li>
				
			</ul>
		</div>
	</nav>

	
	<div class="contenedor">

<div  class="container-fluid">
	<div class="card">
	  <div class="card-body">
		<h5>Tours</h5>
	  </div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="card mb-3">
		  <img class="card-img-top img-fluid rounded" src="img/lujan/catenazapata.jpg" alt="Mendoza Express">
		  <div class="card-body">
		    <h5 class="card-title">Luján de Cuyo</h5>
		    <p class="card-text" align="left">Salida del hotel para transitar por Ruta Nacional 40 hacia el sur, a 40 minutos nos espera la primera propuesta, Bodega Pulenta Estate, una de las más linda vista a la cordillera desde los viñedos. Luego es turno de Bodega Catena Zapata, la tradicional arquitectura de pirámide que se impone entre sus viñedos lo recibirá en un mundo lleno de color, sabores y aromas. Para finalizar visitaremos Bodega Susana Balbo, en ella encontraremos el Restaurante Osadía, una de las mejores alternativas gastronómicas de Lujan de Cuyo, su almuerzo diseñado con un maridaje especial hará que el final de la excusión sea un momento único.</p>
		    <p class="card-text"><small class="text-muted">Mendoza</small></p>
		  </div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="card mb-3">
		  <img class="card-img-top img-fluid rounded" src="img/maipu/granenemigo.jpg" alt="Mendoza Express">
		  <div class="card-body">
		    <h5 class="card-title">Maipú</h5>
			Salimos del hotel en busca de la primera región del vino, Maipú, ubicada al este de la ciudad de Mendoza. A unos 30 minutos comenzaremos esta experiencia a través de las bodegas mas tradicionales e históricas. Nuestra primer visita es Bodega Benegas Lynch, en ella degustaremos vinos con tradición y con historia. Luego nos dirigiremos a Bodega Trapiche, experiencia y pasión se mezclan en sus vinos dentro de un marco imponente. Para finalizar esta experiencia visitaremos Casa El Enemigo, en ella cerraremos nuestro Wine Tour, lleno de experiencias nuevas, todo alrededor del vino.</p>
		    <p class="card-text"><small class="text-muted">Mendoza</small></p>
		  </div>
		</div>
	</div>
	
</div>
</div>

<script type="text/javascript">
	

$(document).ready(function()
{

	$("#bloque0").click(function(e){
		
        $("#pagina").load("index.html");
        
    });

  	$("#inicio").click(function(e){
		
        $("#pagina").load("index.html");
        
    });

	$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
	});
</script>
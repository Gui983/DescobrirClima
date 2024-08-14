<?php 
	include('php/requestOfAPI.php');
	include('php/organizateRequestOfAPI.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Descobrir clima</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark d-flex flex-wrap bg-dark "> 
		<div class="container-fluid">
		<a class="navbar-brand" href="#"><i class="bi bi-cloud-drizzle" style="color:white"></i> DescobrirClima</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav me-auto mb-2 mb-md-0">
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-door-fill" style="color:white"></i> Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="paths/sobre.php" style="color:white"><i class="bi bi-question" style="color:white"></i> Sobre</a>
			</li>
		</div>
		<form class="in-line d-flex nav-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
            <input class="form-control" type="number" placeholder="Insira o CEP" aria-label="Search" style="margin-right:1%" name="request_cep">
            <button style="width:150px;" class="btn btn-outline-success" type="submit">Buscar <i class="bi bi-search"></i></button>
        </form>
		</div>
	</nav>

	<div class="navbar navbar-dark bg-dark box-shadow description in-line d-flex">
		<div>
			<h2 style="color:white;">Clima e previsão de tempo</h2>
		</div>
		<div class="in-line d-flex nav-right">
			<h2 style="color:white"><i class="bi bi-crosshair2"></i> <?php echo $cidadeAtual?>   </h2>
			<h2 style="color:white"> /<?php echo $temperaturaEmGrausCelsius?>°</h2>
		</div>
	</div>

	<div class="first_content container" style="margin-top:30px">
		<div class="row justify-content-center">	
			<div class="first-content-card card col-5" style="max-width:20rem">
				<div class="city-informations-first card-body">
					<h2 class="card-title" style="font-size:20px;padding-bottom:10px">Tempo agora em <?php echo $cidadeAtual.', '.$paisAtual?></h2>

					<p class="temperatura_first card-text"><i class="bi bi-thermometer"></i>Temperatura : <?php echo $temperaturaEmGrausCelsius?>°</p>

					<p class="situacao_first card-text"><i class="bi bi-brightness-high"></i>Clima : <?php retornarClimaTraduzido($clima);?></p>

					<p class="sensacao_first card-text"><i class="bi bi-water"></i>Umidade Atual : <?php echo $umidade?>%</p>

					<p class="vento_first card-text"><i class="bi bi-wind"></i>Velocidade do vento : <?php echo $velocidadeDoVentoEmKM;?> km/h</p>
					<p class="fuso_horario_first card-text" style="padding-bottom:10%"><i class="bi bi-clock"></i>Fuso Horário : <?php echo $fusoHorario;?> </p>
					<p class="text-center align-bottom">Clima e previsão do tempo na DescobrirTempo</p>
				</div>
			</div>

			<div class="first_ad col-5 card">
				<a href="#"><img src="imagens/anuncios/ads-1.png" width="100%"  height="100%"class="img-thumbnail img-fluid image-ads" id="ads-images" alt="exemplos_de_anuncios"></a>
				<div class="row">
					<div class="col-md-10">
						<p class="text-start"><i class="bi bi-circle" id="circulo-um"></i><i class="bi bi-circle" id="circulo-dois"></i><i class="bi bi-circle" id="circulo-tres"></i></p>
					</div>
					<div class="col-md-2">
						<p class="text-end">ads</p>
					</div>
				</div>
			</div>

		</div>
	</div>

	<section class="secondary">

	</section>

	<div class="container">
		<footer class="py-3 my-4">
			<ul class="nav justify-content-center border-bottom pb-3 mb-3">
			<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
			<li class="nav-item"><a href="paths/sobre.php" class="nav-link px-2 text-muted" target="_blank">Sobre</a></li>
			<li class="nav-item"><a target="_blank" href="https://github.com/Gui983/DescobrirClima" class="nav-link px-2 text-muted">Repositorio Git</a></li>
			<li class="nav-item"><a target="_blank" href="https://github.com/Gui983" class="nav-link px-2 text-muted">GitHub do Autor</a></li>
			<li class="nav-item"><a target="_blank" href="https://getbootstrap.com/" class="nav-link px-2 text-muted">Bootstrap</a></li>
			</ul>
			<p class="text-center text-muted">&copy; 2024 Company, Inc</p>
		</footer>
	</div>

	<!-- bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/changeAds.js" type="text/javascript"></script>
</body>
</html>
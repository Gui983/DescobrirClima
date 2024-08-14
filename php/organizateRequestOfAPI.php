<?php 
    $cidadeAtual = $responseApiClima['name'];
	$paisAtual = $responseApiClima['sys']['country'];

	$clima = $responseApiClima['weather']['0']['description'];

	$temperaturaEmGrausCelsius = $responseApiClima['main']['temp'] - 273.15;

	$umidade = $responseApiClima['main']['humidity'];

	$velocidadeDoVento = $responseApiClima['wind']['speed']*10/1.609*2;

	$velocidadeDoVentoEmKM = number_format((float)$velocidadeDoVento,1,'.','');
	
	$fusoHorario = $responseApiClima['timezone'];
	
	function retornarClimaTraduzido($clima){
		if($clima == 'broken clouds'){
			$climaAtual = 'Nublado';
			echo $climaAtual; 
		}else if($clima == 'rain'){
			$climaAtual = 'Chuvoso';
			echo $climaAtual; 
		}else if($clima == 'clear sky'){
			$climaAtual = 'Céu Limpo';
			echo $climaAtual; 
		}else if($clima == 'thunderstorm'){
			$climaAtual = 'Chuva Pesada';
			echo $climaAtual;
		}
	}

?>
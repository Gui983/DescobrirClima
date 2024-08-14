<?php
	$indexRequestCep = $_POST['request_cep'] ?? '01153-000';

	$apiKeys = array(
			'apiKeyCep'=>'AIzaSyA_BHjFt5w3kYn0BK6Lqhof8jVtyJeG7_E',
			'apiKeyClima'=>'83dc37a5dee2c7a44842ce081a049249'
		);

	$urlResquestApiCep = 'https://maps.googleapis.com/maps/api/geocode/json?address='.$indexRequestCep.'&key='.$apiKeys['apiKeyCep'];
	
	function getResponseApi($url){
			$curl = curl_init();
			curl_setopt($curl,CURLOPT_URL,$url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$responseApi = json_decode(curl_exec($curl),true);
			curl_close($curl);
			return $responseApi;
		}

	$isSetCep = isset($indexRequestCep);
	
	if($isSetCep){

		$responseApiCep = getResponseApi($urlResquestApiCep);

		$responseApiCepLatLong = array(
			'latitude'=>$responseApiCep['results']['0']['geometry']['location']['lat'],
			'longitude'=>$responseApiCep['results']['0']['geometry']['location']['lng']
		);

		$isSetResponseApiCepLatLong = isset($responseApiCepLatLong['latitude'],$responseApiCepLatLong['longitude']);

		if($isSetResponseApiCepLatLong){
			$urlRequestApiClima = 'https://api.openweathermap.org/data/2.5/weather?lat='.$responseApiCepLatLong['latitude'].'&lon='.$responseApiCepLatLong['longitude'].'&appid='.$apiKeys['apiKeyClima'];

			$responseApiClima = getResponseApi($urlRequestApiClima);

			$responseApiClimaDados = array(
				'cidadeSelecionada'=>$responseApiClima['name'],
				'climaAtual'=>$responseApiClima['weather']['0']['main'],
				'descricaoClimaAtual'=>$responseApiClima['weather']['0']['description'],
				'velocidadeVentoAtual'=>$responseApiClima['wind']['speed'],
				'temperaturaAtual'=>$responseApiClima['main']['temp'] - 273.15,
				'temperaturaMinimaAtingida'=>$responseApiClima['main']['temp_min'] - 273.15 ,
				'temperaturaMaximaAtingida'=>$responseApiClima['main']['temp_max'] - 273.15,
				'umidadeAtual'=>$responseApiClima['main']['humidity']);

			return $responseApiClimaDados;
			

		}else{
			echo '<h1 style="color:red">Erro : Sem Latitude ou Longitude !</h1>';
		}
	}

?>


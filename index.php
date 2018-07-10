<?php

	$weatherNadym = json_decode(file_get_contents('https://samples.openweathermap.org/data/2.5/weather?q=Tyumen,ru&appid=14678467976d78b803e73334d167c514'));
	
	print_r($weatherNadym["wheather"]);
?>
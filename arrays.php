<?php 

	$lista = ["item1","item2","item3"];
	foreach ($lista as $key => $value) {
		echo $value;
	}

	$grade = array("segunda" => "programação" , "terça-feira" => "banco de dados");

	foreach ($grade as $key => $value) {
		echo $key. '  ' .$value;
	}

?>
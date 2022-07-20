<?php

$greting = "Hello, " . htmlspecialchars($_GET['name']);

$names = [htmlspecialchars($_GET['name']), 'Miguel', 'Teles'];

$person = [
	'first_name' => htmlspecialchars($_GET['name']),
	'eye' => 'green',
	'age' => 25
	];

// die(); -> é para matar o programa

var_dump($person); //-> mostrar os valores do array
//$person['comida_favorita'] = 'Carbonara'; -> adiciona um novo key ao array
//unset($person['age']); -> faz com que nao seja mostrado

require 'Lesson_5.view.php';



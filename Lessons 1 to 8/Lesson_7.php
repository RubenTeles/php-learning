<?php

$greting = "Hello, " . htmlspecialchars($_GET['name']);

$person = [
	'first_name' => htmlspecialchars($_GET['name']),
	'eye' => 'green',
	'age' => 25
	];

require 'Lesson_7.view.php';
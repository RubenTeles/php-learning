<?php

APP::bind('conf', require 'Lesson_15_conf.php');

$conf = APP::get('conf');

APP::bind('database', new QuerryBuilder(Connection::make($conf['database'])));

function view($name, $data)
{
	if (!empty($data))
		extract($data);

	return "views/{$name}.view.php";
}

function redirect($path)
{
	header("Location: /{$path}");
}

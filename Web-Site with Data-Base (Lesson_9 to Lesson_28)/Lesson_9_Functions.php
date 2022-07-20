<?php

function dd($data)
{
	die('<pre>'.var_dump($data).'</pre>');
}

function is_age($age)
{
	if ($age >= 21)
		echo 'Can Entry';
	else
		echo 'Cannot Entry';
	die();
}

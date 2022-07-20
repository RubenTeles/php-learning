<?php

//$router->define([
//	'' => 'controllers/index.php',
//	'about' => 'controllers/about.php',
//	'about/culture' => 'controllers/about-culture.php',
//	'contact' => 'controllers/contact.php',
//	'name' => 'controllers/name.php',
//]);

$router->get('', 'Lesson_23_PagesController@home');
$router->get('about', 'Lesson_23_PagesController@about');
$router->get('about/culture', 'Lesson_23_PagesController@about_culture');
$router->get('contact', 'Lesson_23_PagesController@contact');

$router->get('tasks', 'Lesson_23_TasksController@tasks');

$router->post('name', 'Lesson_23_TasksController@name');
$router->post('create-task', 'Lesson_23_TasksController@create_task');

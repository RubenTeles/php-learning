<?php

require 'vendor/autoload.php';
require 'core/Lesson_14_bootstrap.php';

Router::load('Lesson_16_Routes.php')
	->direct(Request::uri(), Request::method());

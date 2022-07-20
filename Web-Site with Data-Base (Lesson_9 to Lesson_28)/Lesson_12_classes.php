<?php

include_once 'Lesson_9_Functions.php';

class Task
{
	private $description;
	private $completed;

	//----- LESSON 12----
	//----- Default ----
	//public function __construct($description)
	//{
	//	$this->description = $description;
	//}

	public function is_completed(): bool
	{
		return $this->completed;
	}

	public function get_description()
	{
		return $this->description;
	}

	public function completed()
	{
		$this->completed = true;
	}
}

/*----LESSON 12----
$tasks = [
	new Task('Go to the piscine'),
	new Task('Pick up the trash'),
	new Task('Take the dog for a walk')
	];

$tasks[1]->completed();

require 'Lesson_12.view.php';*/


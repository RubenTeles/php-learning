<?php

class Lesson_23_TasksController
{
	public function tasks()
	{
		$data_base = APP::get('database');
		$tasks = $data_base->selectAll('todos', 'Task');

		require view('tasks',compact($tasks));
	}
	public  function name()
	{
		require view('Lesson_2',  0);
	}
	public function create_task()
	{
		$description = !empty($_POST['description']) ? $_POST['description'] : '';
		$data_base = APP::get('database');

		if ($description != '')
			$data_base->insert('todos', $description);

		return redirect('tasks');
	}
}
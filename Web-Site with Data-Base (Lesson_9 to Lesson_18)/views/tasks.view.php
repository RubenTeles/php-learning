<?php require 'views/partials/Lesson_17_head.php' ?>

	<h1>Tasks (Classes)</h1>
	<ul>
		<?php foreach ($tasks as $task): ?>
			<?php if ($task->is_completed()) : ?>
				<strike><li><?= $task->get_description()?></li></strike>
			<?php else : ?>
				<li><?= $task->get_description()?></li>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>

<?php require 'views/Lesson_19_Submit.view.php' ?>

<?php require 'views/partials/Lesson_17_footage.php' ?>
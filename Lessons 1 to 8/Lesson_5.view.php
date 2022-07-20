<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
        header {
            background: #e3e3e3;

            padding: 2em;

            text-align: center;
        }

	</style>

</head>
<body>

<header>
	<h1>
		<?= $greting; ?>
	</h1>
</header>
<ul>
	<?php foreach ($names as $n) {
		echo "<li>$n</li>";
	}?>
</ul>
<ul>
	<?php foreach ($person as $key => $n) {
		echo "<li><strong>$key</strong> = $n</li>";
	}?>
</ul>

</body>
</html>
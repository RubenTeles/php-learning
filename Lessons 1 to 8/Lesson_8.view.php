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
    <h1>Arrays</h1>
    <?php
    $arrLength = count($animals);
    //echo $arrLength;
    echo '<h3>Animals (Array)</h3>';
    echo '<ul>';
    for ($i = 0; ($i < ($arrLength - 1)); $i++)
    {
	    echo '<li><strong>';
	    echo ucfirst($animals[$i]) . "\n";
	    echo '</strong></li>';
    }
    echo '</ul>';
    ?>
    <h3>Task (Associative Array (foreach))</h3>
    <ul> <?php foreach ($task as $key => $value) : ?>
        <li>
            <strong><?= ucfirst($key) ?>:</strong> <?= ucfirst($value) ?>
        </li>
        <?php endforeach; ?>
	</ul>

    <h3>Task (Associative Array (Manual))</h3>
    <ul>
        <li>
            <strong>Name: </strong> <?= ucfirst($task['title']) ?>
        </li>
        <li>
            <strong>Due: </strong> <?= ucfirst($task['due']) ?>
        </li>
        <li>
            <strong>Person: </strong> <?= ucfirst($task['assigned_to']) ?>
        </li>
        <li>
            <strong>Status: </strong> <?= ucfirst($task['completed']) ? '&#9989;' : '&#10060;' ?>
        </li>

    </ul>

</body>
</html>
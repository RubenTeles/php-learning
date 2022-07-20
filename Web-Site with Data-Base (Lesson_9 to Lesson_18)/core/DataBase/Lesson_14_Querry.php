<?php

class QuerryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table, $name)
	{
		$statement = $this->pdo->prepare("Select * From {$table}");

		$statement->execute();

		return $statement->fetchALL(PDO::FETCH_CLASS, $name);

	}

	public function insert($table, $parameter)
	{
		//$sql = sprintf(
		//	'insert into %s (%s) values (%s)',
		//	$table,
		//	implode(', ', array_keys($parameter)),
		//	':' . implode(', :', array_keys($parameter)),
		//);

		//dd($sql);
		try {
		//$statement = $this->pdo->prepare($sql);
		$statement = $this->pdo->prepare("Insert Into {$table} (description, completed) Values ('$parameter', 0)");

		$statement->execute();
		} catch (Exception $e) {
			die( $e->getMessage() );
		}
	}
}

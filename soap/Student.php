<?php

include "../db/Database.php";

class Student {
	/**
	 * @var Database
	 */
	private $database;

	function __construct() {
		$this->database = new Database();
	}

	function getStudent($admission_number) {
		try {
			return $this->database->get_student($admission_number);
		} catch (Exception $e) {
			return null;
		}
	}
}

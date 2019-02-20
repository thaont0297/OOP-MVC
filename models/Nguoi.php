<?php 
	require_once LIBRARY_PATH . "database.php";

	class Nguoi extends Database {

		public function __construct()
		{
			parent::__construct();
		}

		public $id;
		public $ten;
		public $ngaysinh;
		public $quequan;

	}

?>
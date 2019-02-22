<?php 
	require_once LIBRARY_PATH . "database.php";
	

	class Nguoi extends Database{

		public function __construct()
		{
			parent:: __construct();
		}

		protected $id;
		protected $ten;
		protected $ngaysinh;
		protected $que;

		public function setID($id)
		{
			$this->id = $id; 
		}

		public function getID($id)
		{
			return $this->id;
		}

		public function setTen($ten)
		{
			$this->ten = $ten;
		}

		public function getTen($ten)
		{
			return $this->ten;
		}

		public function setNgaysinh($ngaysinh)
		{
			$this->ngaysinh = $ngaysinh;
		}

		public function getNgaysinh($ngaysinh)
		{
			return $this->ngaysinh;
		}

		public function setQue($que)
		{
			$this->que = $que;
		}

		public function getQue($que)
		{
			return $this->que;
		}

	}

?>
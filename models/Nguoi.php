<?php 
	class Nguoi{
		protected $id;
		protected $ten;
		protected $ngaySinh;
		protected $que;

		public function __construct()
		{

		}

		public function setID($id)
		{
			$this->id = $id; 
		}

		public function getID()
		{
			return $this->id;
		}

		public function setTen($ten)
		{
			$this->ten = $ten;
		}

		public function getTen()
		{
			return $this->ten;
		}

		public function setNgaySinh($ngaysinh)
		{
			$this->ngaySinh = $ngaySinh;
		}

		public function getNgaySinh()
		{
			return $this->ngaySinh;
		}

		public function setQue($que)
		{
			$this->que = $que;
		}

		public function getQue()
		{
			return $this->que;
		}

	}

?>
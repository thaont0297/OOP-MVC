<?php 
	require_once MODEL_PATH . "Nguoi.php";

	class CBGV extends Nguoi
	{
		protected $luongcung;
		protected $thuong;
		protected $phat;
		protected $luongthuclinh;

		public function __construct()
		{
			parent:: __construct();
		}

		public function setLuongcung($luongcung)
		{
			$this->luongcung = $luongcung; 
		}

		public function getLuongcung()
		{
			return $this->luongcung;
		}

		public function setThuong($thuong)
		{
			$this->thuong = $thuong; 
		}

		public function getThuong()
		{
			return $this->thuong;
		}

		public function setPhat($phat)
		{
			$this->phat = $phat; 
		}

		public function getPhat()
		{
			return $this->phat;
		}

		public function setLuongthuclinh($luongthuclinh)
		{
			$this->luongthuclinh = $luongthuclinh; 
		}

		public function getLuongthuclinh()
		{
			return $this->luongthuclinh;
		}
	}
?>
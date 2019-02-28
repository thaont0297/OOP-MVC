<?php 
	require_once MODEL_PATH . "Nguoi.php";

	class CBGV extends Nguoi
	{
		protected $luongCung;
		protected $thuong;
		protected $phat;
		protected $luongThuc;

		public function __construct()
		{
			parent:: __construct();
		}

		public function setLuongCung($luongCung)
		{
			$this->luongCung = $luongCung; 
		}

		public function getLuongCung()
		{
			return $this->luongCung;
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

		public function setLuongThuc($luongThuc)
		{
			$this->luongThuc = $luongThuc; 
		}

		public function getLuongThuc()
		{
			return $this->luongThuc;
		}
	}
?>
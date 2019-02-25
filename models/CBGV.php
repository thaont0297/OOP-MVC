<?php 
	require_once MODEL_PATH . "Nguoi.php";

	class CBGV extends Nguoi
	{
		protected $luongCung;
		protected $thuong;
		protected $phat;
		protected $luongThucLinh;

		public function __construct()
		{
			parent:: __construct();
		}

		public function setLuongCung($luongCung)
		{
			$this->LuongCung = $LuongCung; 
		}

		public function getLuongCung()
		{
			return $this->LuongCung;
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

		public function setLuongThuc($LuongThuc)
		{
			$this->LuongThuc = $LuongThuc; 
		}

		public function getLuongThuc()
		{
			return $this->LuongThuc;
		}
	}
?>
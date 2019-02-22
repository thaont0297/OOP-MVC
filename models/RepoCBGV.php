<?php 
	require_once LIBRARY_PATH . "database.php";
	require_once MODEL_PATH . "Nguoi.php";
	require_once MODEL_PATH . "CBGV.php";
	/**
	 * 
	 */
	class RepoCBGV extends Nguoi implements CBGV
	{
		protected $_connect;
		protected $luongcung;
		protected $thuong;
		protected $phat;
		protected $luongthuclinh;

		public function __construct()
		{
			parent:: __construct();
			$this->_connect = new Database();

		}

		public function setLuongcung($luongcung)
		{
			$this->luongcung = $luongcung; 
		}

		public function getLuongcung($luongcung)
		{
			return $this->luongcung;
		}

		public function setThuong($thuong)
		{
			$this->thuong = $thuong; 
		}

		public function getThuong($thuong)
		{
			return $this->thuong;
		}

		public function setPhat($phat)
		{
			$this->phat = $phat; 
		}

		public function getPhat($phat)
		{
			return $this->phat;
		}
		public function setLuongthuclinh($luongthuclinh)
		{
			$this->luongthuclinh = $luongthuclinh; 
		}

		public function getLuongthuclinh($luongthuclinh)
		{
			return $this->luongthuclinh;
		}
		
		public function tinhLuong()
		{
			$sql = 'UPDATE giaovien SET giaovien.luongthuclinh = giaovien.luongcung + giaovien.thuong - giaovien.phat';
			$result = $this->_connect->excuted($sql);
		}

		public function getGV()
		{
			$sql = 'SELECT * FROM giaovien';
			$result = $this->_connect->excuted($sql);
			return $result->fetch_all(MYSQLI_ASSOC);
		}
		public function createGV($where = [])
		{
			if (!empty($where) > 0 ) {
			$sql = 'INSERT INTO giaovien (ten, ngaysinh, que, luongcung, thuong, phat) VALUES ("'.$where['ten'].'","'.$where['ngaysinh'].'","'.$where['que'].'","'.$where['luongcung'].'","'.$where['thuong'].'","'.$where['phat'].'");';
			echo $sql;
				if ($result = $this->_connect->excuted($sql)) {
					return true;
		 		} else {
		 			echo 'Không thể thêm'.$this->_connect->error();
		 			return false;
		 		}
			}
		}

		public function getOne($where = [])
		{
			if (isset($where)) {
				$sql = 'SELECT * FROM giaovien WHERE id = '.$where['id'];
				$query = $this->_connect->excuted($sql);
				if ($query) {
					$result = $query->fetch_assoc();
					return $result;
				}
			}
		}

		public function editGV($where = [])
		{
			if (!empty($where) > 0 ) {
			$sql = 'UPDATE giaovien SET ten = "'.$where['ten'].'", ngaysinh = "'.$where['ngaysinh'].'", que = "'.$where['que'].'", luongcung = "'.$where['luongcung'].'", thuong = "'.$where['thuong'].'", phat = "'.$where['phat'].'" WHERE id = '. $where['id'];
			echo $sql;
				if ($result = $this->_connect->excuted($sql)) {
					return true;
		 		} else {
		 			echo 'Không thể sửa'.$this->_connect->error();
		 			return false;
		 		}
			}
		}

		public function deleteGV($id)
		{
				$sql = 'DELETE FROM giaovien WHERE id = '.$id;
				if ($result = $this->_connect->excuted($sql)) {
					return true;
				} else {
					echo "Không thể xóa".$this->_connect->error();
					return false;
				}

		}

		public function searchGV($strWhere)
		{
			$sql = 'SELECT * FROM giaovien WHERE ten LIKE "%'.$strWhere.'%"';
			$query = $this->_connect->excuted($sql);
				if ($query) {
					$result = $query->fetch_all(MYSQLI_ASSOC);
					return $result;
				}
		}

	}

?>
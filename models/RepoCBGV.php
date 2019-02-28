<?php 
	require_once LIBRARY_PATH . "database.php";
	require_once MODEL_PATH . "CBGV.php";
	/**
	 * 
	 */
	class RepoCBGV 
	{
		protected $_connect;
		protected $_model;

		public function __construct()
		{
			$this->_connect = new Database();
		}
		
		public function getSalary()
		{
			$sql = 'UPDATE giaovien SET giaovien.luongthuclinh = giaovien.luongcung + giaovien.thuong - giaovien.phat';
			if($this->_model = $this->_connect->excuted($sql)) {
				return true;
		 	} else {
		 		echo 'Không thể tính'.$this->_connect->error();
		 		return false;
		 	} 
		}

		public function getlistGV()
		{
			$sql = 'SELECT * FROM giaovien';
			$query = $this->_connect->excuted($sql);
			$this->_model = $query->fetch_all(MYSQLI_ASSOC);
			$dataList = array();
			foreach ($this->_model as $key) {
				$gv = new CBGV();
				$gv->setID($key['id']);
				$gv->setTen($key['ten']);
				$gv->setNgaySinh($key['ngaysinh']);
				$gv->setQue($key['que']);
				$gv->setLuongCung($key['luongcung']);
				$gv->setThuong($key['thuong']);
				$gv->setPhat($key['phat']);
				$gv->setLuongThuc($key['luongthuclinh']);
				$dataList[] = $gv;
			}
			return $dataList;

		}
		public function createGV($gv)
		{
			print_r($gv->getLuongCung());
			$sql = 'INSERT INTO giaovien (ten, ngaysinh, que, luongcung, thuong, phat) VALUES ("'.$gv->getTen().'","'.$gv->getNgaySinh().'","'.$gv->getQue().'","'.$gv->getLuongCung().'","'.$gv->getThuong().'","'.$gv->getPhat().'");';
			echo $sql;
			if ($this->_model = $this->_connect->excuted($sql)) {
				return true;
	 		} else {
	 			echo 'Không thể thêm'.$this->_connect->error();
		 		return false;
		 	}
		}

		public function getGV($id)
		{
			$sql = 'SELECT * FROM giaovien WHERE id = '.$id;
			$query = $this->_connect->excuted($sql);
			if ($query) {
				$this->_model = $query->fetch_object();
				return $this->_model;
			}
		}

		public function editGV($gv)
		{
			$sql = 'UPDATE giaovien SET ten = "'.$gv->getTen().'", ngaysinh = "'.$gv->getNgaySinh().'", que = "'.$gv->getQue().'", luongcung = "'.$gv->getLuongCung().'", thuong = "'.$gv->getThuong().'", phat = "'.$gv->getPhat().'" WHERE id = '. $gv->getID();
			echo $sql;
			if ($this->_model = $this->_connect->excuted($sql)) {
				return true;
		 	} else {
		 		echo 'Không thể sửa'.$this->_connect->error();
		 		return false;
		 	}
		}

		public function deleteGV($id)
		{
				$sql = 'DELETE FROM giaovien WHERE id = '.$id;
				if ($this->_model = $this->_connect->excuted($sql)) {
					return true;
				} else {
					echo "Không thể xóa".$this->_connect->error();
					return false;
				}

		}

		public function searchGV($ten)
		{
			$sql = 'SELECT * FROM giaovien WHERE ten LIKE "%'.$ten.'%"';
			$query = $this->_connect->excuted($sql);
			if ($query) {
				$this->_model = $query->fetch_all(MYSQLI_ASSOC);
				$dataList = array();
				foreach ($this->_model as $key) {
					$gv = new CBGV();
					$gv->setID($key['id']);
					$gv->setTen($key['ten']);
					$gv->setNgaySinh($key['ngaysinh']);
					$gv->setQue($key['que']);
					$gv->setLuongCung($key['luongcung']);
					$gv->setThuong($key['thuong']);
					$gv->setPhat($key['phat']);
					$gv->setLuongThuc($key['luongthuclinh']);
					$dataList[] = $gv;
				}
				return $dataList;
			}
		}

	}

?>
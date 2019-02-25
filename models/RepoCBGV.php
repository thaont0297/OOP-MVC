<?php 
	require_once LIBRARY_PATH . "database.php";
	require_once MODEL_PATH . "CBGV.php";
	/**
	 * 
	 */
	class RepoCBGV 
	{
		protected $_connect;

		public function __construct()
		{
			$this->_connect = new Database();
		}
		
		public function getSalary()
		{
			$sql = 'UPDATE giaovien SET giaovien.luongthuclinh = giaovien.luongcung + giaovien.thuong - giaovien.phat';
			if($result = $this->_connect->excuted($sql)) {
				return true;
		 	} else {
		 		echo 'Không thể tính'.$this->_connect->error();
		 		return false;
		 	} 
		}

		public function getGV()
		{
			$sql = 'SELECT * FROM giaovien';
			$result = $this->_connect->excuted($sql);
			return $result->fetch_all(MYSQLI_ASSOC);
		}
		public function createGV($gv)
		{
			print_r($gv->getLuongcung());
			$sql = 'INSERT INTO giaovien (ten, ngaysinh, que, luongcung, thuong, phat) VALUES ("'.$gv->getTen().'","'.$gv->getNgaysinh().'","'.$gv->getQue().'","'.$gv->getLuongcung().'","'.$gv->getThuong().'","'.$gv->getPhat().'");';
			echo $sql;
			if ($result = $this->_connect->excuted($sql)) {
				return true;
	 		} else {
	 			echo 'Không thể thêm'.$this->_connect->error();
		 		return false;
		 	}
		}

		public function getOne($id)
		{
			$sql = 'SELECT * FROM giaovien WHERE id = '.$id;
			$query = $this->_connect->excuted($sql);
			if ($query) {
				$result = $query->fetch_object();
				return $result;
			}
		}

		public function editGV($gv)
		{
			$sql = 'UPDATE giaovien SET ten = "'.$gv->getTen().'", ngaysinh = "'.$gv->getNgaysinh().'", que = "'.$gv->getQue().'", luongcung = "'.$gv->getLuongcung().'", thuong = "'.$gv->getThuong().'", phat = "'.$gv->getPhat().'" WHERE id = '. $gv->getID();
			echo $sql;
			if ($result = $this->_connect->excuted($sql)) {
				return true;
		 	} else {
		 		echo 'Không thể sửa'.$this->_connect->error();
		 		return false;
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

		public function searchGV($ten)
		{
			$sql = 'SELECT * FROM giaovien WHERE ten LIKE "%'.$ten.'%"';
			$query = $this->_connect->excuted($sql);
			if ($query) {
				$result = $query->fetch_all(MYSQLI_ASSOC);
				return $result;
			}
		}

	}

?>
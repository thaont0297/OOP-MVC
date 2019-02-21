<?php 
	require_once LIBRARY_PATH . "database.php";
	require_once MODEL_PATH . "Nguoi.php";
	/**
	 * 
	 */
	class CBGV extends Nguoi
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function tinhLuong()
		{
			$sql = 'UPDATE giaovien SET giaovien.luongthuclinh = giaovien.luongcung + giaovien.thuong - giaovien.phat';
			$result = $this->_connect->query($sql);
		}

		public function getGV()
		{
			$sql = 'SELECT giaovien.id, giaovien.ten, giaovien.ngaysinh, giaovien.que, giaovien.luongcung, giaovien.thuong, giaovien.phat, giaovien.luongthuclinh FROM giaovien';
			$result = $this->_connect->query($sql);
			return $result->fetch_all(MYSQLI_ASSOC);
		}
		public function create($where = [])
		{
			if (!empty($where) > 0 ) {
			$sql = 'INSERT INTO giaovien (ten, ngaysinh, que, luongcung, thuong, phat) VALUES ("'.$where['ten'].'","'.$where['ngaysinh'].'","'.$where['que'].'","'.$where['luongcung'].'","'.$where['thuong'].'","'.$where['phat'].'");';
			echo $sql;
				if ($result = $this->_connect->query($sql)) {
					return true;
		 		} else {
		 			echo 'Không thể thêm'.$this->_connect->error;
		 			return false;
		 		}
			}
		}

		public function getOne($where = [])
		{
			if (isset($where)) {
				$sql = 'SELECT * FROM giaovien WHERE id = '.$where['id'];
				$query = $this->_connect->query($sql);
				if ($query) {
					$result = $query->fetch_assoc();
					return $result;
				}
			}
		}

		public function edit($where = [])
		{
			if (!empty($where) > 0 ) {
			$sql = 'UPDATE giaovien SET ten = "'.$where['ten'].'", ngaysinh = "'.$where['ngaysinh'].'", que = "'.$where['que'].'", luongcung = "'.$where['luongcung'].'", thuong = "'.$where['thuong'].'", phat = "'.$where['phat'].'" WHERE id = '. $where['id'];
			echo $sql;
				if ($result = $this->_connect->query($sql)) {
					return true;
		 		} else {
		 			echo 'Không thể sửa'.$this->_connect->error;
		 			return false;
		 		}
			}
		}

		public function delete($where = [])
		{
			if (isset($where)) {
				$sql = 'DELETE FROM giaovien WHERE id = '.$where['id'];
				if ($result = $this->_connect->query($sql)) {
					return true;
				} else {
					echo "Không thể xóa".$this->_connect->error;
					return false;
				}

			}
		}

	}

?>
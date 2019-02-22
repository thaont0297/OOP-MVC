<?php 
	interface CBGV
	{
		public function getGV();
		public function tinhLuong();
		public function createGV($where = []);
		public function editGV($where = []);
		public function getOne($id);
		public function deleteGV($id);
	}
?>
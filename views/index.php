<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Danh sách cán bộ giáo viên</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<center>
		<table border = "1" cellpadding = "4">
			<h1>Danh sách cán bộ giáo viên</h1>
			<h3><a href="index.php?c=cbgv&m=create">Thêm giáo viên</a></h3>
			<form action="index.php?c=cbgv&m=search" method="POST" accept-charset="utf-8">
				Tìm kiếm theo tên: 
				<input id="myInput" type="text" name="ten">
				<button type="submit" name="search">Tìm kiếm</button>
			</form>
			<thead>
				<tr>
					<th>ID</th>
					<th>Họ tên</th>
					<th>Ngày sinh</th>
					<th>Quê quán</th>
					<th>Lương cơ bản</th>
					<th>Thưởng</th>
					<th>Phạt</th>
					<th>Lương thực lĩnh</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody id="myTable">
				<?php foreach ($data as $key): ?>
				<tr>	
					<td><?php echo $key->getID(); ?></td>
					<td><?php echo $key->getTen(); ?></td>
					<td><?php echo $key->getNgaySinh(); ?></td>
					<td><?php echo $key->getQue(); ?></td>
					<td><?php echo $key->getLuongCung(); ?></td>
					<td><?php echo $key->getThuong(); ?></td>
					<td><?php echo $key->getPhat(); ?></td>
					<td><?php echo $key->getLuongThuc(); ?></td>
					<td>
						<a href="index.php?c=cbgv&m=edit&id=<?php echo $key->getID(); ?>" title="Sửa">Sửa</a> | 
						<a href="index.php?c=cbgv&m=delete&id=<?php echo $key->getID(); ?>" title="Xóa" onClick="return confirm('Bạn muốn xóa?')">Xóa</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</center>
</body>
</html>
<script>
	$(document).ready(function(){
		$("#myInput").on("keyup",function(){
			var value = $(this).val().toLowerCase();
			$("#myTable tr").filter(function(){
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});

		});
	});
</script>					
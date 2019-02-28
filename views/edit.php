<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sửa thông tin giáo viên</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<center>
		<form action="" method="POST" accept-charset="utf-8">
			<table cellpadding="5">
				<h1>Sửa thông tin giáo viên</h1>
				<tbody>
					<tr>
						<th>Họ Tên:</th>
						<td><input type="text" name="ten" placeholder="Nguyễn Văn A" value="<?php echo $data->ten; ?>" required></td>
					</tr>
					<tr>
						<th>Ngày sinh:</th>
						<td><input type="text" name="ngaysinh" placeholder="2000-3-16" value="<?php echo $data->ngaysinh ?>" required></td>
					</tr>
					<tr>
						<th>Quê quán:</th>
						<td><input type="text" name="que" placeholder="Hà Nội,..." value="<?php echo $data->que ?>" required></td>
					</tr>
					<tr>
						<th>Lương cơ bản:</th>
						<td><input type="number" name="luongcung" placeholder="2000000" value="<?php echo $data->luongcung ?>" required></td>
					</tr>
					<tr>
						<th>Thưởng</th>
						<td><input type="number" name="thuong" placeholder="150000" value="<?php echo $data->thuong ?>" required></td>
					</tr>
					<tr>
						<th>Phạt</th>
						<td><input type="number" name="phat" placeholder="150000" value="<?php echo $data->phat ?>" required></td>
					</tr>
					<tr>
						<th colspan="2"><input type="submit" name="edit" value="Sửa"></th>
					</tr>
				</tbody>
			</table>
		</form>
		<a href="?c=cbgv">Quay lại trang chủ</a>
	</center>
</body>
</html>
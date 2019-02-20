<!DOCTYPE html>
<html>
<head>
	<title>Thêm giáo viên</title>
</head>
<body>
	<center>
		<form action="" method="POST" accept-charset="utf-8">
			<table cellpadding="5">
				<h1>Thêm giáo viên</h1>
				<tbody>
					<tr>
						<th>Họ Tên:</th>
						<td><input type="text" name="ten" placeholder="Nguyễn Văn A" value="<?php if (isset($_POST['create']) && isset($_POST['ten'])) echo $_POST['ten']; ?>" required></td>
					</tr>
					<tr>
						<th>Ngày sinh:</th>
						<td><input type="text" name="ngaysinh" placeholder="2000-3-16" value="<?php if (isset($_POST['create']) && isset($_POST['ngaysinh'])) echo $_POST['ngaysinh'] ?>" required></td>
					</tr>
					<tr>
						<th>Quê quán:</th>
						<td><input type="text" name="que" placeholder="Hà Nội,..." value="<?php if (isset($_POST['create']) && isset($_POST['ngaysinh'])) echo $_POST['que'] ?>" required></td>
					</tr>
					<tr>
						<th>Lương cơ bản:</th>
						<td><input type="number" name="luongcung" placeholder="2000000" value="<?php if (isset($_POST['create']) && isset($_POST['ngaysinh'])) echo $_POST['luongcung'] ?>" required></td>
					</tr>
					<tr>
						<th>Thưởng</th>
						<td><input type="number" name="thuong" placeholder="150000" value="<?php if (isset($_POST['create']) && isset($_POST['ngaysinh'])) echo $_POST['thuong'] ?>" required></td>
					</tr>
					<tr>
						<th>Phạt</th>
						<td><input type="number" name="phat" placeholder="150000" value="<?php if (isset($_POST['create']) && isset($_POST['ngaysinh'])) echo $_POST['phat'] ?>" required></td>
					</tr>
					<tr>
						<th colspan="2"><input type="submit" name="create" value="Thêm"></th>
					</tr>
				</tbody>
			</table>
		</form>
	</center>
</body>
</html>
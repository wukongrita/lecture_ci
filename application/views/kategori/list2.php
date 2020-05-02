<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Kategori</title>
	<style>
		body {
			font-family: Tahoma;
			font-size: 11pt;
			background: cyan;
		}
	</style>
</head>
<body>
	<h1>Master Kategori Buku</h1>
	<table border="1" width="100%">
		<tr>
			<th>Kode</th>
			<th>Kategori</th>
			<th>-actions-</th>
		</tr>

	<?php
		foreach ($data as $row) {
	?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td>
				edit |
				<a href="<?php echo site_url() . '/Kategori/hapus/' . $row['id']; ?>">hapus</a>
			</td>
		</tr>
	<?php
		}
	?>
	</table>
</body>
</html>

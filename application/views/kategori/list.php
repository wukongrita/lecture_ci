<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Kategori</title>
</head>
<body>
	<h1>Master Kategori Buku</h1>

	<a href="<?php echo site_url() . '/Kategori/tambah'; ?>">Tambah</a>

	<?php
	if ($data) {
	?>
	<table border="1">
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

	<?php
	} else {
	?>
		<h3>Tidak ada data</h3>
	<?php
	}
	?>

</body>
</html>

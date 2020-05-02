<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Master Kategori</title>
</head>
<body>
	<h1>Master Kategori Buku</h1>
	<form method="post" action="<?php echo site_url() . '/Kategori/simpan'; ?>">
		ID: <input type="text" name="txtId"> <br>
		Nama: <input type="text" name="txtName"> <br>
		<input type="submit" value="Simpan">
	</form>
</body>
</html>

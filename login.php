

<?php if(isset($_POST["submit"])) : ?>

	<?php if ($_POST["nama"] != "" && is_numeric($_POST["nim"]) == TRUE && strlen($_POST["nim"]) == 10) : ?>
		<h1>Selamat Datang, <?php echo $_POST["nama"]; ?></h1>
		<h1>NIM anda : <?php echo $_POST["nim"]; ?></h1>

	<?php else: ?>
		<p><i>Data yang anda masukkan kurang tepat</i></p>
		<p><i>Nim harus berupa angka dan 10 karakter</i></p>
		<p><i>Dan nama tidak boleh dibiarkan kosong</i></p>

	<?php endif; ?>

<?php else: ?>
	<h1>Silahkan masukkan nama dan nim anda</h1>
<?php endif; ?>




<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>

	<form action="" method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td><input name="nama" type="text"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input name="nim" type="text" placeholder="1800018..."></td>
			</tr>
			<tr>
				<td></td>
				<td><button name="submit" type="submit">Kirim</button></td>
			</tr>
		</table>
	</form>

</body>
</html>
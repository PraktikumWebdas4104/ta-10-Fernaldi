<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr align="center">
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" size="45" /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Genre Film</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="gen[]" value="horror"/>horror<br>
						<input type="checkbox" name="gen[]" value="animasi"/>animasi<br>
						<input type="checkbox" name="gen[]" value="thriller"/>thriller<br>
						<input type="checkbox" name="gen[]" value="action"/>action<br>
						<input type="checkbox" name="gen[]" value="anime"/>anime<br>
					</td>
				</tr>
				<tr align="center">
					<td>Wisata Tujuan</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="wis[]" value="Labuan bajo"/>Labuan bajo<br>
						<input type="checkbox" name="wis[]" value="Bangka belitung"/>Bangka belitung<br>
						<input type="checkbox" name="wis[]" value="Bali"/>Bali<br>
						<input type="checkbox" name="wis[]" value="Pulau Derawan"/>Pulau Derawan<br>
						<input type="checkbox" name="wis[]" value="Raja Ampat"/>Raja Ampat<br>
					</td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi insert pada controller
		$main = new controller();
		$main->insert();
		//panggil controller insert
	}
?>
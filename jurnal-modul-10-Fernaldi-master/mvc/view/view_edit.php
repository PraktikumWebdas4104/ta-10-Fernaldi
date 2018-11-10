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
					<td><input type="text" name="nim" value="<?=$row[0]?>" size="45" readonly /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$row[1]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" value="<?=$row[2]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" value="<?=$row[3]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" value="<?=$row[4]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Genre Film</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="gen[]" value="horror" <?php  if(in_array("horror",$genre)){echo "checked";}?>/>horror<br>
						<input type="checkbox" name="gen[]" value="animasi" <?php  if(in_array("animasi",$genre)){echo "checked";}?>/>animasi<br>
						<input type="checkbox" name="gen[]" value="thriller" <?php  if(in_array("thriller",$genre)){echo "checked";}?>/>thriller<br>
						<input type="checkbox" name="gen[]" value="action" <?php  if(in_array("action",$genre)){echo "checked";}?>/>action<br>
						<input type="checkbox" name="gen[]" value="anime" <?php  if(in_array("anime",$genre)){echo "checked";}?>/>anime<br>
					</td>
				</tr>
				<tr align="center">
					<td>Wisata Tujuan</td>
					<td>:</td>
					<td>
						<input type="checkbox" name="wis[]" value="Labuan bajo" <?php  if(in_array("Labuan bajo",$genre)){echo "checked";}?>/>Labuan bajo<br>
						<input type="checkbox" name="wis[]" value="Bangka belitung" <?php  if(in_array("Bangka belitung",$genre)){echo "checked";}?>/>Bangka belitung<br>
						<input type="checkbox" name="wis[]" value="Bali" <?php  if(in_array("Bali",$genre)){echo "checked";}?>/>Bali<br>
						<input type="checkbox" name="wis[]" value="Pulau Derawan" <?php  if(in_array("Pulau Derawan",$genre)){echo "checked";}?>/>Pulau Derawan<br>
						<input type="checkbox" name="wis[]" value="Raja ampat" <?php  if(in_array("Raja ampat",$genre)){echo "checked";}?>/>Raja ampat<br>
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
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi update pada controller
		$main = new controller();
		$main->update();
		//panggil controller update
	}
?>
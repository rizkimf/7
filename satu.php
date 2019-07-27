<!DOCTYPE html>
<html>
<head>
	<title>Satu</title>
</head>
<body>
<?php
$Agama = ""; 
 ?>
<tr>Nama Lengkap
<br>
	<td>
		<input name="nama" type="text" id="nama" size="30" maxlength="30">
	</td>
</br>
</tr>

<br>
<tr>Tempat Lahir
<br>
	<td>
		<form method="POST" action="">
<h4><select name="tempat">
<option value="Tempat"></option>
</select>
	</td>
</br>
</tr>
</br>

<tr>Tanggal Lahir
<br>
	<td>
		<input name="nama" type="text" id="Tanggal" size="30" maxlength="30">
	</td>
</br>
</tr>

<br>
<tr>No. Hp
<br>
	<td>
		<input name="nama" type="text" id="Hp" size="30" maxlength="30">
	</td>
</br>
</tr>
</br>

<tr>Alamat
<br>
	<td>
		<input name="nama" type="text" id="Alamat" size="30" maxlength="30">
	</td>
</br>
</tr>

<br>
<tr>Pendidikan Terakhir
<br>
	<td>
		<form method="POST" action="">
<h4><select name="pendidikan">
<option value="Pendidikan"></option>
</select>
	</td>
</br>
</tr>
</br>

<tr>Agama
<br>
  <input type="radio" name="Agama" <?php if (isset($Agama) && $Agama=="Islam") echo "checked";?> value="Islam">Islam
  <br>
  <input type="radio" name="Agama" <?php if (isset($Agama) && $Agama=="Kristen") echo "checked";?> value="Kristen">Kristen
  <br>
  <input type="radio" name="Agama" <?php if (isset($Agama) && $Agama=="Katolik") echo "checked";?> value="Katolik">Katolik
  <br><br>
</br>
</tr>

<tr>Hobby
<br>
	<td>
		<form action="" method="post">
<input type="checkbox" name="check1" value="Renang">Renang<br/>
<input type="checkbox" name="check2" value="Mancing">Mancing<br/>
<input type="checkbox" name="check3" value="Game">Game<br/>
<input type="checkbox" name="check3" value="Ghibah">Ghibah<br/>
<input type="checkbox" name="check3" value="Programming">Programming<br/>
</form>
	</td>
</br>
</tr>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REKOD SUHU PELAJAR</title>
</head>
<style type="text/css">
	h2 {
		text-align: center;
		padding-top: 20px;
	}

	body {
		background-color: #7FFFD4;
	}
</style>
<body>
	<center>
		<h2>Borang Imbasan Suhu Pelajar</h2>

		<table border=0 cellpadding=5 cellspacing=1 bgcolor=white style="padding: 20px; border-top: 1px; border-left: 2px; border-right: 2px; border-bottom: 1px; border-radius: 10px;">
			
		
			<form action="" method="post">
				<tr>
					<td>Id Pelajar</td><td>:</td>
					<td><input type="text" name="id_pelajar" required><br><br><br></td>
				</tr>
				<tr>
					<td>Nama Pelajar</td><td>:</td>
					<td><input type="text" name="nama_pelajar" required><br><br><br></td>
				</tr>
				<tr>
					<td>Kelas</td><td>:</td>
					<td><input type="text" name="kelas" required><br><br><br></td>
				</tr>
				<tr>
					<td>Suhu</td><td>:</td>
					<td><input type="text" name="suhu" required><br><br><br></td>
				</tr>
				<tr>
					<td>Tarikh</td><td>:</td>
					<td><input type="date" name="tarikh" required><br><br><br></td>
				</tr>
				<tr>
					<td>Catatan</td><td>:</td>
					<td><select type="text" name="catatan" required>
						<option value="Tiada Simpton">Tiada Simpton</option>
						<option value="Demam">Demam</option>
						<option value="Sakit Tekak">Sakit Tekak</option>
						<option value="Batuk">Batuk</option>
						<option value="Suhu Melebihi 37">Suhu Melebihi 37</option> <br><br></td>
						</select>
				</tr>
				<tr>
					<td colspan="3">
						<center> <input type="submit" name="hantar" value="Hantar"> </center>
					</td>
				</tr>
			</form>
		</table>
	</center>
</body>

  <?php
   include('config.php');
   if (isset($_POST['hantar'])) {
   	$id_pelajar=$_POST["id_pelajar"];
   	$nama_pelajar=$_POST["nama_pelajar"];
   	$kelas=$_POST["kelas"];
   	$suhu=$_POST["suhu"];
   	$tarikh=$_POST["tarikh"];
   	$catatan=$_POST["catatan"];

   	$add=mysqli_query($con, "INSERT INTO pelajar values ('$id_pelajar', '$nama_pelajar','$kelas', '$suhu', '$tarikh', '$catatan')");
   	header('location:index.php');
   	// penamat untuk if
  }
?>

</html>
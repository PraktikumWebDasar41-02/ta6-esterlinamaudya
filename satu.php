<!DOCTYPE html>
<html>
<head>
	<title>jurnal6</title>
</head>
<body>
	<center>
	<table>
	<form method="POST" action="">
		<tr>
			<td><b/>Nama:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td><b/>Nim:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td><b/>Kelas:</td>
			<td>
				<input type="radio" name="kelas"/>D3MI-41-01
				<input type="radio" name="kelas"/>D3MI-41-02
				<input type="radio" name="kelas"/>D3MI-41-03
				<input type="radio" name="kelas"/>D3MI-41-04
			</td>
		</tr>
		<tr>
			<td><b/>Jenis Kelamin:</td>
			<td>
				<input type="radio" name="jk"/>Laki-laki
				<input type="radio" name="jk"/>Perempuan
			</td>
		</tr>
		<tr>
			<td><b/>Hobi:</td>
			<td>
				<input type="checkbox" name="hobi"/>Makan
				<input type="checkbox" name="hobi"/>Tidur
				<input type="checkbox" name="hobi"/>Mandi
			</td>
		</tr>
		<tr>
			<td><b/>Fakultas:</td>
			<td>
				<select name="fakultas">
					<option>FIT</option>
					<option>FKB</option>
					<option>FEB</option>
					<option>FIK</option>
					<option>FRI</option>
					<option>FTE</option>
					<option>FIF</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><b/>Alamat:</td>
			<td><input type="textare" name="alamat"></td>
		</tr>
		<tr>
			<td><input type="submit" name="kirim"></td>
		</tr>
	</form>
	</table>
	</center>
</body>
</html>

<?php
include 'koneksi.php';
if (isset($_POST['kirim'])){
	if(strlen($_POST['nama'])>35 || $_POST['nama']==""){
				echo "Nama tidak terdeteksi"."<br>";
	}else{
		$Nama = $_POST['nama'];
	}
	if(strlen($_POST['nim'])==10 && $_POST['nim']!="" && is_numeric($_POST['nim'])){
		$Nim = $_POST['nim'];
	}else{
		echo "Nim kurang"."<br>";
	}
	$Kls = $_POST['kelas'];
	$Jeniskel = $_POST['jk'];
	$Hobi = $_POST['hobi'];
	$Fakultas = $_POST['fakultas'];
	$Alamat = $_POST['alamat'];
		session_start();
		$_SESSION['nim'] = $Nim;
		$query = mysqli_query($conn,"INSERT INTO tb_jurnal6(Nama, Nim, Kelas, JK, Hobi, Fakultas, Alamat) VALUES ('$Nama','$Nim','$Kls','$Jeniskel','$Hobi','$Fakultas','$Alamat')");
		//$kueri = mysqli_query($conn,"SELECT*FROM tb_jurnal6");
		// if ($query){
		// 	echo "Data anda sudah tersimpan";
		// 	header("Location:lihat.php");
		// }else{
		// 	echo "Data anda tidak tersimpan";
		// }
}
	?>
<?php

include('dat.php');
session_start();
if
	(!isset($_SESSION['nim'])){
	header('location:log.php');
}

$Nim=$_SESSION['nim'];
$Data=get($nim);
$Hobi=explode("-", $koneksi['hobi']);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Halaman Awal </title>
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="main.js"/>
</head>
<body>

	<table border='1' align="center">
	<tr>
		<td>
			<a href="posting.php">Postingan</a>
		</td>
		<td>
			<a href="daftarposting.php">Daftar Posting </a>
		</td>
		<td>
			<a href="semuaposting.php">Semua Posting</a>
		</td>
		<td>
			<a href="editprofile.php">Edit Profil</a>
		</td>
		<td>
			<a href="out.php">Logout</a>
		</td>
	</tr>
	</table>
	<br>


<?php

echo "<table border='2' align='center'><tr><td>Nama :</td><td>".$koneksi['nama']."</td></tr>";
echo "<tr><td>NIM :</td><td>".$koneksi['nim']."</td></tr>";
echo "<tr><td>Kelas :</td><td>".$koneksi['kelas']."</td></tr>";
echo "<tr><td>Jenis Kelamin :</td><td>".$koneksi['kelamin']."</td></tr>";
echo "<tr><td>Hobi :</td><td>";

foreach ($hobi as $v) {
	echo "- ".$v."<br>";
}

echo "</td></tr>";
echo "<tr><td>Fakultas:</td><td>".$koneksi['fakultas']."</td></tr>";
echo "<tr><td>Alamat :</td><td>".$koneksi['alamat']."</td></tr></table>";

?>

</body>
</html>
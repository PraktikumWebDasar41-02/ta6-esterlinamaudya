<?php 
session_start();
include 'koneksi.php';
$Nim = $_SESSION['nim'];
$query = mysqli_query($conn,"SELECT * FROM tb_jurnal6 WHERE  NIM = '$Nim'");
if ($arr=mysqli_fetch_array($query)) {
	$Nama=$arr['Nama'];
	$Nim=$arr['Nim'];	
	$Kls=$arr['Kelas'];	
	$Jeniskel=$arr['JK'];	
	$Hobi=$arr['Hobi'];	
	$Fakultas=$arr['Fakultas'];	
	$Alamat=$arr['lamat'];		
}else{echo "GAGAL";}
?>

<form method="post">

<table>

	<tr>
		<td>Nama :</td>
		<td><?php echo $Nama."<br>"; ?></td>
	</tr>

	<tr>
		<td>NIM :</td>
		<td><?php echo $Nim."<br>"; ?></td>
	</tr>

	<tr>
		<td>Kelas :</td>
		<td><?php echo $Kls."<br>"; ?></td>
	</tr>

	<tr>
		<td>Jenis Kelamin :</td>
		<td><?php echo $Jeniskel."<br>"; ?></td>
	</tr>

	<tr>
		<td>Hobi :</td>
		<td><?php echo $Hobi."<br>"; ?></td>
	</tr>

	<tr>
		<td>Fakultas :</td>
		<td><?php echo $Fakultas."<br>"; ?></td>
	</tr>

	<tr>
		<td>Alamat :</td>
		<td><?php echo $Alamat."<br>"; ?></td>
	</tr>

	<tr>

		<td><input type="submit" name="batal" value="Input baru"></td>
	</tr>

</table>
</form>

<?php 
if (isset($_POST['batal'])) {
	session_destroy();
	header("Location:satu.php");
}
 ?>
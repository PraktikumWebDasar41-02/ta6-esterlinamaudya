<?php 
 $conn = mysqli_connect("localhost","root","","db_jurnal6");
 if ($conn) {
 	echo "berhasil";
 	# code...
 } else{
 	echo "gagal";
 }
 ?>
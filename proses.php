<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];
$hitung = count(explode(" ", $komentar));

echo "<br><br> NIM : $nim";
echo "<br><br> Nama : $nama";
echo "<br><br> Email : $email";
echo "<br><br> Jumlah kata : $hitung";

if ($hitung < 5){
	echo "<br><br>Maaf Jumlah kata harus lebih dari 5 ";
}else{
	die("<br><br>$komentar");
}
?>
<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan =$_POST['pekerjaan'];
mysqli_query($koneksi, "INSERT INTO user1 VALUES ('','$nama','$alamat','$pekerjaan')");
header("location:index.php?pesan=input");
?>

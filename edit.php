<!DOCTYPE html>
<html>
<head>
	<title>Ujikom</title>
	
</head>
<body>
	
	<h2 align="center">Selamat Datang Di Form edit</h2>
		<a href="index.php">Lihat Semua Data</a>
		<h3 align="center">Pastikan Data yang kamu masukan Sudah benar!</h3>

<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($koneksi,"select * from user1 WHERE id='$id' ")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)) {
?>
	
	<form action="update.php" method="post">
		<style>
				* {
  font-family: sans-serif; 
}
.content-table {
  border-collapse: collapse;
  margin-top: 50px;
  margin-left: 500px;
  font-size: 0.9em;
  min-width: 350px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  text-align: left;
  font-weight: bold;

}

.content-table th,
.content-table td {
  padding: 12px 15px;
}


		</style>
			<table class="content-table">
	<thead>
	<tr>
		<td>Nama</td>
		<td>
		<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
		<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
		</td>					
	</tr>

	<tr>	
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>			
	</tr>


		<tr>
			<td>Pekerjaan</td>
		<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>"></td>

	</tr>
	</thead>	
			
	<tr>	
		<td align="center"><input type="submit" value="Simpan"></td>	
		<td align="center"><input type="reset" value="Batal"></td>				
	</tr>	

	</table>
</form>


<?php } ?>
</body>
</html>

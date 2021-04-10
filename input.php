<!DOCTYPE html>
<html>
<head>
	<title>Ujikom</title>
</head>
<body>
		
	<h1 align="center">Silahkan Masukan Data Baru</h1>
	
		<a href="index.php"><h5>Lihat Semua Data</a></h5>

			<h3 align="center">Pastikan data kamu diisi dengan benar ya!</h3>


				<form action="input-aksi.php" method="post">
					
		<style>
			
			* {
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin-top: 50px;
  margin-left: 500px;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {

  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}


		</style>

	<table class="content-table" align="center">	
		<tr>	
			<td>Nama</td>
				<td><input type="text" name="nama"></td>						
			</tr>

			<tr>	
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>						
			</tr>	
			
			<tr>	
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>					

			<tr>	
				<td><input type="submit" value="Simpan"></td>
				<td><input type="reset"	 value="Batal"> </td>		
			</tr>				
	</table>

</form>
</body>
</html>

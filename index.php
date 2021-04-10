<!DOCTYPE html>
<html>
<head>
	<title>Ujikom</title>	
</head>	
<body>
	
		<h1 align="center">Data Karyawan PT Karya Anak Bangsa </h1>
		
	</div>
	<br/>
	<a class="tombol" href="input.php" style="font-family: Arial, Helvetica, sans-serif;"> Tambah Data Baru Klik Disini</a>

	<?php 
		if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	} ?>
	<br/>

	<h3 style="font-family: 'Quicksand', sans-serif;" align="center ">Data Karyawan</h3>

	<style>
		* {
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin-top: 50px;
  margin-left: 300px;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;

}

.content-table thead tr {

  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 15px 30px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}
		}
	</style>

	<table class="content-table">
		<thead>
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Opsi</th>

	</thead>

		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($koneksi,"select * from user1");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
			
		?>
		<tbody>
		<tr>
			<td><?php echo $nomor++; ?></td>			
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['pekerjaan'];?></td>
			<td>
		<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
		<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>	
			</td>
		</tr>
</tbody>

		<?php } ?>
	</table>
</body>
</html>

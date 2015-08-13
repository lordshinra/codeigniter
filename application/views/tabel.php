<html>
<head>
	<title>Data User</title>
</head>
<body>
	<?php echo "<h2>".$this->session->flashdata('pesan')."</h2>" ?>
	<table border="1" style="border-collapse:collapse; width:50%;">
		<tr style="background:grey;">
			<th>NIM</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		<?php foreach ($data as $tampil) {?>
		<tr>
			<td><?php echo $tampil['nim'] ?></td>
			<td><?php echo $tampil['nama'] ?></td>
			<td><?php echo $tampil['alamat'] ?></td>
			<td align="center">
			    <a href="<?php echo base_url()."index.php/crud/do_edit/".$tampil['id_user']; ?>">Edit</a>
			    ||
			    <a href="<?php echo base_url()."index.php/crud/do_delete/".$tampil['id_user']; ?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<a href="<?php echo base_url()."index.php/crud/add_data"; ?>">Tambah Data</a>
</body>
</html>
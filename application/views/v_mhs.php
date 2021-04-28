<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>

	<table border="1px solid black">
		
		<tr>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>NAMA</th>
			<th>UMUR</th>
			<th>ALAMAT</th>
			<th>TELPON</th>
			<th>EMAIL</th>
			<th>TANGGAL LAHIR</th>
			<th>KODE POS</th>
			<th>NAMA IBU</th>
			<th>GENDER</th>

		</tr>


		<?php foreach ($akademik as $mhs): ?>

			<tr>
				<td><?php echo $mhs['username']; ?></td>
				<td><?php echo $mhs['password']; ?></td>
				<td><?php echo $mhs['nama']; ?></td>
				<td><?php echo $mhs['umur']; ?></td>
				<td><?php echo $mhs['alamat']; ?></td>
				<td><?php echo $mhs['telp']; ?></td>
				<td><?php echo $mhs['email']; ?></td>
				<td><?php echo $mhs['tgl_lahir']; ?></td>
				<td><?php echo $mhs['kode_pos']; ?></td>
				<td><?php echo $mhs['nama_ibu_k']; ?></td>
				<td><?php echo $mhs['gender']; ?></td>
			</tr>

		<?php endforeach; ?>

	</table>


</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Database Wibuu >v< </title> <style>
			table {
			border-collapse: collapse;
			}

			th,
			td {
			text-align: left;
			padding: 8px;
			}

			tr:nth-child(even) {
			background-color: #f2f2f2
			}

			th {
			background-color: #4CAF50;
			color: white;
			text-align: center;
			}
			</style>
</head>
<h1>Database Wibu >v<</h1>
<body>
	<br>
	<a href=<?= site_url('C_1461800048/view_tambah') ?> >Tambah Data</a>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Judul Buku</th>
				<Th>Jumlah</Th>
				<th>Kategori</th>
				<th>Pengarang</th>
				<th>Penerbit</th>
				<th>Tahun Terbit</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach($tbl_nilai as $row){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row->judul_buku ?></td>
				<td><?php echo $row->jumlah_buku ?></td>
				<td><?php echo $row->nama_kategori ?></td>
				<td><?php echo $row->pengarang_buku ?></td>
				<td><?php echo $row->nama_penerbit ?></td>
				<td><?php echo $row->tahun_terbit_buku ?></td>
				<td><?= anchor(site_url("C_1461800048/view_edit/").$row->kode_buku,'Ubah')?> | <?= anchor(site_url("C_1461800048/hapus/").$row->kode_buku,'Hapus')?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>

</html><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Database Wibuu >v< </title> <style>
			table {
			border-collapse: collapse;
			}

			th,
			td {
			text-align: left;
			padding: 8px;
			}

			tr:nth-child(even) {
			background-color: #f2f2f2
			}

			th {
			background-color: #4CAF50;
			color: white;
			text-align: center;
			}
			</style>
</head>
<h1>Database Wibu >v<</h1>
<body>
	<br>
	<a href=<?= site_url('Siswa/tambah') ?> >Tambah Data</a>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>NIS</th>
				<Th>Nama</Th>
				<th>No.Telp</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach($si_siswa as $row){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row->nis ?></td>
				<td><?php echo $row->nama ?></td>
				<td><?php echo $row->no_tlp ?></td>
				<td><?= anchor(site_url("Siswa/ubah/").$row->nis,'Ubah')?> | <?= anchor(site_url("Siswa/hapus/").$row->nis,'Hapus')?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>

</html>
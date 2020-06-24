<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah Koleksi Wibuu >v<</title> 
</head> 

<body>
		<h1>Ubah Koleksi Wibu >v<</h1> <form action="<?= site_url('Siswa/ubah') ?>" method="post">
					<?php 
            foreach($isi_db as $data)
            ?>

					<label for="">NIS</label>
					<input type="text" placeholder="NIS" name="nis" value="<?= $data->nis ?>">
					<br>
					<label for="">Kelas</label>
					<input type="text" placeholder="Kelas" name="kelas" value="<?= $data->id_kelas ?>">
					<br>
					<label for="">Nama</label>
					<input type="text" placeholder="Nama" name="nama" value="<?= $data->nama ?>">
					<br>
					<label for="">Tempat Tanggal Lahir</label>
					<input type="text" placeholder="Tempat Tanggal Lahir" name="ttl" value="<?= $data->ttl ?>">
					<br>
					<label for="">Agama</label>
					<input type="text" placeholder="Agama" name="agama" value="<?= $data->agama ?>">
					<br>
					<label for="">Gender</label>
					<input type="text" placeholder="Gender" name="gender" value="<?= $data->gender ?>">
					<br>
					<label for="">Alamat</label>
					<input type="text" placeholder="Alamat" name="alamat" value="<?= $data->alamat ?>">
					<br>
                    <label for="">No Telepon</label>
					<input type="text" placeholder="No Telepon" name="no_hp" value="<?= $data->no_tlp ?>">
					<br>
					<button type="submit">Save oh yeah</button>
					</form>
					</body>

</html>
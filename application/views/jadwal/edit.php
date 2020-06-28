<div class="container-fluid mt-4">

	<h4>Data Jadwal</h4>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= site_url("jadwal") ?>">Jadwal</a></li>
			<li class="breadcrumb-item active" aria-current="page">Edit</li>
		</ol>
	</nav>

	<?php if ($this->session->flashdata('message')) : ?>
		<div class="alert alert-<?= $this->session->flashdata('theme') ?>" role="alert">
			<?= $this->session->flashdata('message'); ?>
		</div>
	<?php endif; ?>

	<div class="card mt-2">
		<div class="card-header">
			Edit Jadwal
		</div>
		<div class="card-body">

			<form action="<?= site_url("jadwal/edit") ?>" method="post">
				<div class="form-group">
					<label for="id_jadwal">ID Jadwal</label>
					<input type="number" class="form-control" id="id_jadwal" readonly name="id_jadwal" value="<?= $row->id_jadwal ?>">
				</div>
				
				<div class="form-row">
				<div class="form-group col-md-6">
					<label for="id_kelas">Kelas</label>
					<select id="id_kelas" name="id_kelas" class="form-control">
						<option selected>Pilih...</option>
						<option value="K001" <?= $row->id_kelas == 'K001' ? 'selected' : '' ?>>7A</option>
						<option value="K002" <?= $row->id_kelas == 'K002' ? 'selected' : '' ?>>7B</option>
						<option value="K003" <?= $row->id_kelas == 'K003' ? 'selected' : '' ?>>7C</option>
						<option value="K004" <?= $row->id_kelas == 'K004' ? 'selected' : '' ?>>7D</option>
						<option value="K005" <?= $row->id_kelas == 'K005' ? 'selected' : '' ?>>7E</option>
					</select>
					</div>
					<div class="form-group col-md-6">
                    <label for="id_mapel">Mapel</label>
					<select id="id_mapel" name="id_mapel" class="form-control">
						<option selected>Pilih...</option>
						<option value="M001"<?= $row->id_mapel == 'M001' ? 'selected' : ''?>>Bahasa Indonesia</option>
						<option value="M002"<?= $row->id_mapel == 'M002' ? 'selected' : ''?>>Biologi</option>
						<option value="M003"<?= $row->id_mapel == 'M003' ? 'selected' : ''?>>Fisika</option>
						<option value="M004"<?= $row->id_mapel == 'M004' ? 'selected' : ''?>>Kimia</option>
						<option value="M005"<?= $row->id_mapel == 'M005' ? 'selected' : ''?>>Agama Islam</option>
						
					</select>
					</div>
				</div>
				<div class="form-group">
				<label for="nip">Guru</label>
					<select id="nip" name="nip" class="form-control">
						<option selected>Pilih...</option>
						<option value="60670"<?= $row->nip == '60670' ? 'selected' : ''?>>Wantono</option>
						<option value="60680"<?= $row->nip == '60680' ? 'selected' : ''?>>Sugeng</option>
						<option value="60690"<?= $row->nip == '60690' ? 'selected' : ''?>>Suparti</option>
						<option value="60700"<?= $row->nip == '60700' ? 'selected' : ''?>>Nur Jannah</option>
						<option value="60710"<?= $row->nip == '60710' ? 'selected' : ''?>>Sukiat Mukidi</option>
						
					</select>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
                    <label for="hari">Hari</label>
					<select id="hari" name="hari" class="form-control">
						<option selected>Pilih...</option>
						<option value="Senin"<?= $row->hari == 'Senin' ? 'selected' : ''?>>Senin</option>
						<option value="Selasa"<?= $row->hari == 'Selasa' ? 'selected' : ''?>>Selasa</option>
						<option value="Rabu"<?= $row->hari == 'Rabu' ? 'selected' : ''?>>Rabu</option>
						<option value="Kamis"<?= $row->hari == 'Kamis' ? 'selected' : ''?>>Kamis</option>
						<option value="Jumat"<?= $row->hari == 'Jumat' ? 'selected' : ''?>>Jumat</option>
						
					</select>
					</div>
					<div class="form-group col-md-3">
					<label for="jam_mulai">Jam Mulai</label>
					<input type="time" class="form-control" id="jam_mulai" name="jam_mulai" value="<?= $row->jam_mulai ?>">
					</div>
					<div class="form-group col-md-3">
                    <label for="jam_akhir">Jam Akhir</label>
					<input type="time" class="form-control" id="jam_akhir" name="jam_akhir" value="<?= $row->jam_akhir ?>">
					</div>
				</div>

				<button type="submit" class="btn btn-primary" value="simpan" name="simpan">Simpan</button>
			</form>

		</div>
	</div>

</div>

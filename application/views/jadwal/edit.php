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
							<?php
								foreach ($kelas as $r) :
							?>
							<option value="<?= $r->id_kelas ?>" <?= $row->id_kelas == $r->id_kelas ? 'selected' : '' ?>><?= $r->nama_kelas ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="id_mapel">Mapel</label>
						<select id="id_mapel" name="id_mapel" class="form-control">
							<option selected>Pilih...</option>
							<?php
								foreach ($mapel as $r) :
							?>
							<option value="<?= $r->id_mapel ?>" <?= $row->id_mapel == $r->id_mapel ? 'selected' : '' ?>><?= $r->nama_mapel ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="nip">Guru</label>
					<select id="nip" name="nip" class="form-control">
						<option selected>Pilih...</option>
						<?php
							foreach ($guru as $r) :
						?>
						<option value="<?= $r->nip ?>" <?= $row->nip == $r->nip ? 'selected' : '' ?>><?= $r->nama_guru ?></option>
						<?php endforeach; ?>

					</select>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="hari">Hari</label>
						<select id="hari" name="hari" class="form-control">
							<option selected>Pilih...</option>
							<option value="Senin" <?= $row->hari == 'Senin' ? 'selected' : '' ?>>Senin</option>
							<option value="Selasa" <?= $row->hari == 'Selasa' ? 'selected' : '' ?>>Selasa</option>
							<option value="Rabu" <?= $row->hari == 'Rabu' ? 'selected' : '' ?>>Rabu</option>
							<option value="Kamis" <?= $row->hari == 'Kamis' ? 'selected' : '' ?>>Kamis</option>
							<option value="Jumat" <?= $row->hari == 'Jumat' ? 'selected' : '' ?>>Jumat</option>

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

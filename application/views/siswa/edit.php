<div class="container-fluid mt-4">

	<h4>Data Siswa</h4>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= site_url("siswa") ?>">Siswa</a></li>
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
			Edit Siswa
		</div>
		<div class="card-body">

			<form action="<?= site_url("siswa/edit") ?>" method="post">
				<div class="form-group">
					<label for="nis">NIS</label>
					<input type="number" class="form-control" id="nis" readonly name="nis" value="<?= $row->nis ?>">
				</div>
				<div class="form-group">
					<label for="kelas">Kelas</label>
					<select id="kelas" name="kelas" class="form-control">
						<option selected>Pilih...</option>
						<?php
							foreach ($kelas as $r) :
						?>
						<option value="<?= $r->id_kelas ?>" <?= $row->id_kelas == $r->id_kelas ? 'selected' : '' ?>><?= $r->nama_kelas ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama" value="<?= $row->nama ?>">
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="nohp">No Telp</label>
						<input type="number" class="form-control" id="nohp" name="nohp" value="<?= $row->no_tlp ?>">
					</div>
					<div class="form-group col-md-4">
						<label for="tempat_lahir">TTL</label>
						<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $row->tempat_lahir ?>">
					</div>
					<div class="form-group col-md-4">
						<label for="ttl">&nbsp;</label>
						<input type="date" class="form-control" id="ttl" name="ttl" value="<?= $row->ttl ?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
					<label for="gender">Jenis Kelamin</label>
					<select id="gender" name="gender" class="form-control">
						<option selected>Pilih...</option>
						<option value="L" <?= $row->gender == 'L' ? 'selected' : '' ?>>L</option>
						<option value="P" <?= $row->gender == 'P' ? 'selected' : '' ?>>P</option>
					</select>
					</div>
					<div class="form-group col-md-6">
					<label for="agama">Agama</label>
					<select id="agama" name="agama" class="form-control">
						<option selected>Pilih...</option>
						<option value="Islam" <?= $row->agama == 'Islam' ? 'selected' : '' ?>>Islam</option>
						<option value="Kristen" <?= $row->agama == 'Kristen' ? 'selected' : '' ?>>Kristen</option>
						<option value="Katolik" <?= $row->agama == 'Katolik' ? 'selected' : '' ?>>Katolik</option>
						<option value="Hindu" <?= $row->agama == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
						<option value="Buddha" <?= $row->agama == 'Buddha' ? 'selected' : '' ?>>Buddha</option>
						<option value="Kong Hu Cu" <?= $row->agama == 'Kong Hu Cu' ? 'selected' : '' ?>>Kong Hu Cu</option>
					</select>
					</div>
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" id="alamat" rows="3" name="alamat"><?= $row->alamat ?></textarea>
				</div>

				<button type="submit" class="btn btn-primary" value="simpan" name="simpan">Simpan</button>
			</form>

		</div>
	</div>

</div>

<div class="container-fluid mt-4">

	<h4>Data Guru</h4>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= site_url("guru") ?>">Guru</a></li>
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
			Edit Guru
		</div>
		<div class="card-body">

			<form action="<?= site_url("guru/edit") ?>" method="post">
				<div class="form-group">
					<label for="nip">NIP</label>
					<input type="number" class="form-control" id="nip" name="nip" value="<?= $row->nip ?>" readonly>
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama" value="<?= $row->nama_guru ?>">
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" id="alamat" rows="3" name="alamat"><?= $row->alamat ?></textarea>
				</div>
				<div class="form-group">
					<label for="nohp">No HP</label>
					<input type="number" class="form-control" id="nohp" name="nohp" value="<?= $row->nohp ?>">
				</div>

				<button type="submit" class="btn btn-primary" value="simpan" name="simpan">Simpan</button>
			</form>

		</div>
	</div>

</div>

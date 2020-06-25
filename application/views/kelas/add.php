<div class="container-fluid mt-4">

	<h4>Data Kelas</h4>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= site_url("kelas") ?>">Kelas</a></li>
			<li class="breadcrumb-item active" aria-current="page">Tambah</li>
		</ol>
	</nav>

	<?php if ($this->session->flashdata('message')) : ?>
		<div class="alert alert-<?= $this->session->flashdata('theme') ?>" role="alert">
			<?= $this->session->flashdata('message'); ?>
		</div>
	<?php endif; ?>

	<div class="card mt-2">
		<div class="card-header">
			Tambah Kelas
		</div>
		<div class="card-body">

			<form action="<?= site_url("kelas/add") ?>" method="post">
				<div class="form-group">
					<label for="idKelas">ID Kelas</label>
					<input type="text" class="form-control" id="idKelas" name="id_kelas">
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama">
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<input type="text" class="form-control" id="keterangan" name="keterangan" value="-">
				</div>

				<button type="submit" class="btn btn-primary" value="simpan" name="simpan">Simpan</button>
			</form>

		</div>
	</div>

</div>

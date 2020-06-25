<div class="container-fluid mt-4">

	<h4>Data Petugas</h4>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= site_url("petugas") ?>">Petugas</a></li>
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
			Tambah Petugas
		</div>
		<div class="card-body">

			<form action="<?= site_url("petugas/add") ?>" method="post">
				<div class="form-group">
					<label for="idPetugas">ID Petugas</label>
					<input type="number" class="form-control" id="idPetugas" name="id_petugas">
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username">
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<div class="form-group col-md-6">
						<label for="ulangPassword">Ulang Password</label>
						<input type="password" class="form-control" id="ulangPassword" name="ulang_password">
					</div>
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama">
				</div>
				<div class="form-group">
					<label for="level">Level</label>
					<select id="level" name="level" class="form-control">
						<option selected>Pilih...</option>
						<option value="administrator">Administrator</option>
						<option value="guru">Guru</option>
					</select>
				</div>

				<button type="submit" class="btn btn-primary" value="simpan" name="simpan">Simpan</button>
			</form>

		</div>
	</div>

</div>

<div class="container-fluid mt-4">

	<h4>Data Petugas</h4>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= site_url("petugas") ?>">Petugas</a></li>
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
			Tambah Petugas
		</div>
		<div class="card-body">

			<form action="<?= site_url("petugas/edit") ?>" method="post">
				<div class="form-group">
					<label for="idPetugas">ID Petugas</label>
					<input type="number" class="form-control" id="idPetugas" readonly name="id_petugas" value="<?= $row->id_petugas ?>">
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" value="<?= $row->username ?>">
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
					<input type="text" class="form-control" id="nama" name="nama" value="<?= $row->nama ?>">
				</div>
				<div class="form-group">
					<label for="level">Level</label>
					<select id="level" name="level" class="form-control">
						<option selected>Pilih...</option>
						<option value="administrator" <?= $row->level == 'administrator' ? 'selected' : '' ?>>Administrator</option>
						<option value="guru" <?= $row->level == 'guru' ? 'selected' : '' ?>>Guru</option>
					</select>
				</div>

				<button type="submit" class="btn btn-primary" value="simpan" name="simpan">Simpan</button>
			</form>

		</div>
	</div>

</div>

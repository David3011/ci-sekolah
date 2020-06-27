<div class="container-fluid mt-4">

	<h4>Data Siswa</h4>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= site_url("petugas") ?>">Siswa</a></li>
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
			Tambah Siswa
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
						<option value="K001" <?= $row->id_kelas == 'K001' ? 'selected' : '' ?>>7A</option>
						<option value="K002" <?= $row->id_kelas == 'K002' ? 'selected' : '' ?>>7B</option>
						<option value="K003" <?= $row->id_kelas == 'K003' ? 'selected' : '' ?>>7C</option>
						<option value="K004" <?= $row->id_kelas == 'K004' ? 'selected' : '' ?>>7D</option>
						<option value="K005" <?= $row->id_kelas == 'K005' ? 'selected' : '' ?>>7E</option>
					</select>
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama" value="<?= $row->nama ?>">
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="nohp">No Telp</label>
						<input type="text" class="form-control" id="nohp" name="password" value="<?= $row->no_tlp ?>">
					</div>
					<div class="form-group col-md-4">
						<label for="tempat_lahir">TTL</label>
						<input type="text" class="form-control" id="ulangPassword" name="ulang_password" value="<?= $row->tempat_lahir ?>">
					</div>
					<div class="form-group col-md-4">
						<label for="ttl"></label>
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
					<label for="level">Agama</label>
					<select id="level" name="level" class="form-control">
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
					<textarea class="form-control" id="alamat" rows="3" name="alamat" value="<?= $row->alamat ?>"></textarea>
				</div>

				<button type="submit" class="btn btn-primary" value="simpan" name="simpan">Simpan</button>
			</form>

		</div>
	</div>

</div>
<div class="container-fluid mt-4">

	<h4>Data Siswa</h4>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= site_url("siswa") ?>">Siswa</a></li>
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
			Tambah Siswa
		</div>
		<div class="card-body">

			<form action="<?= site_url("siswa/add") ?>" method="post">
				<div class="form-group">
					<label for="nis">NIS</label>
					<input type="number" class="form-control" id="nis" name="nis">
				</div>
                <div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama">
				</div>
				<div class="form-group">
				<label for="kelas">Kelas</label>
					<select id="kelas" name="kelas" class="form-control">
						<option selected>Pilih...</option>
						<option value="K001">7A</option>
						<option value="K002">7B</option>
						<option value="K003">7C</option>
						<option value="K004">7D</option>
						<option value="K005">7E</option>
					</select>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="nohp">No Telp</label>
						<input type="text" class="form-control" id="nohp" name="nohp">
					</div>
					<div class="form-group col-md-4">
						<label for="tempat_lahir">TTL</label>
						<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
					</div>
                    <div class="form-group col-md-4">
						<label for="ttl"></label>
						<input type="date" class="form-control" id="ttl" name="ttl">
					</div>
				</div>
                <div class="form-row">
					<div class="form-group col-md-6">
                    <label for="gender">Jenis Kelamin</label>
					<select id="gender" name="gender" class="form-control">
						<option selected>Pilih...</option>
						<option value="L">L</option>
						<option value="P">P</option>
					</select>
					</div>
					<div class="form-group col-md-6">
                    <label for="agama">Agama</label>
					<select id="agama" name="agama" class="form-control">
						<option selected>Pilih...</option>
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
						<option value="Kong Hu Cu">Kong Hu Cu</option>
					</select>
					</div>
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
				</div>

				<button type="submit" class="btn btn-primary" value="simpan" name="simpan">Simpan</button>
			</form>

		</div>
	</div>

</div>

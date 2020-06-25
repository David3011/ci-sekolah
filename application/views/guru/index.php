<div class="container-fluid mt-4">

	<h4>Data Guru</h4>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Guru</li>
		</ol>
	</nav>

	<?php if ($this->session->flashdata('message')) : ?>
		<div class="alert alert-<?= $this->session->flashdata('theme') ?>" role="alert">
			<?= $this->session->flashdata('message'); ?>
		</div>
	<?php endif; ?>

	<a href="<?= site_url('guru/add') ?>" class="btn btn-outline-primary"><span class="fas fa-plus"></span> Tambah</a>

	<div class="card mt-2">
		<div class="card-header">
			Tabel Guru
		</div>
		<div class="card-body">

			<table id="myTable" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th width="80px">No</th>
						<th>NIP</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>No HP</th>
						<th width="100px">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						foreach ($guru as $row) :
					?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $row->nip ?></td>
						<td><?= $row->nama_guru ?></td>
						<td><?= $row->alamat ?></td>
						<td><?= $row->nohp ?></td>
						<td>
							<a href="<?= site_url('guru/edit/' . $row->nip) ?>" class="btn btn-sm btn-success"> <span class="fas fa-edit"></span> </a>
							<a href="<?= site_url('guru/delete/' . $row->nip) ?>" class="btn btn-sm btn-danger"> <span class="fas fa-trash-alt"></span> </a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<th width="80px">No</th>
						<th>NIP</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>No HP</th>
						<th>Aksi</th>
					</tr>
				</tfoot>
			</table>

		</div>
	</div>

</div>

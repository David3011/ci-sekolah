<div class="container-fluid mt-4">

	<h4>Data Jadwal</h4>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Jadwal</li>
		</ol>
	</nav>

	<?php if ($this->session->flashdata('message')) : ?>
		<div class="alert alert-<?= $this->session->flashdata('theme') ?>" role="alert">
			<?= $this->session->flashdata('message'); ?>
		</div>
	<?php endif; ?>

	<a href="<?= site_url('jadwal/add') ?>" class="btn btn-outline-primary"><span class="fas fa-plus"></span> Tambah</a>

	<div class="card mt-2">
		<div class="card-header">
			Tabel Jadwal
		</div>
		<div class="card-body">

			<table id="myTable" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th width="80px">No</th>
						<th>Mapel</th>
						<th>Kelas</th>
						<th>Guru</th>
						<th width="100px">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						foreach ($jadwal as $row) :
					?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $row->nama_mapel ?></td>
						<td><?= $row->nama_kelas ?></td>
						<td><?= $row->nama_guru ?></td>
						<td>
							<a href="<?= site_url('jadwal/edit/' . $row->id_jadwal) ?>" class="btn btn-sm btn-success"> <span class="fas fa-edit"></span> </a>
							<a href="<?= site_url('jadwal/delete/' . $row->id_jadwal) ?>" class="btn btn-sm btn-danger"> <span class="fas fa-trash-alt"></span> </a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<th width="80px">No</th>
						<th>Mapel</th>
						<th>Kelas</th>
						<th>Guru</th>
						<th>Aksi</th>
					</tr>
				</tfoot>
			</table>

		</div>
	</div>

</div>

<div class="container-fluid mt-4">

	<h4>Data Mapel</h4>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Mapel</li>
		</ol>
	</nav>

	<?php if ($this->session->flashdata('message')) : ?>
		<div class="alert alert-<?= $this->session->flashdata('theme') ?>" role="alert">
			<?= $this->session->flashdata('message'); ?>
		</div>
	<?php endif; ?>

	<a href="<?= site_url('mapel/add') ?>" class="btn btn-outline-primary"><span class="fas fa-plus"></span> Tambah</a>

	<div class="card mt-2">
		<div class="card-header">
			Tabel Mapel
		</div>
		<div class="card-body">

			<table id="myTable" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th width="80px">No</th>
						<th>ID Mapel</th>
						<th>Nama</th>
						<th width="100px">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						foreach ($mapel as $row) :
					?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $row->id_mapel ?></td>
						<td><?= $row->nama_mapel ?></td>
						<td>
							<a href="<?= site_url('mapel/edit/' . $row->id_mapel) ?>" class="btn btn-sm btn-success"> <span class="fas fa-edit"></span> </a>
							<a href="<?= site_url('mapel/delete/' . $row->id_mapel) ?>" class="btn btn-sm btn-danger"> <span class="fas fa-trash-alt"></span> </a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<th width="80px">No</th>
						<th>ID Mapel</th>
						<th>Nama</th>
						<th>Aksi</th>
					</tr>
				</tfoot>
			</table>

		</div>
	</div>

</div>

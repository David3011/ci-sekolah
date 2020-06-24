<div class="container-fluid mt-4">

	<h4>Data Petugas</h4>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
			<li class="breadcrumb-item active" aria-current="page">Petugas</li>
		</ol>
	</nav>

	<a href="<?= site_url('petugas/add') ?>" class="btn btn-outline-primary"><span class="fas fa-plus"></span> Tambah</a>

	<div class="card mt-2">
		<div class="card-header">
			Tabel Petugas
		</div>
		<div class="card-body">

			<table id="myTable" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>Username</th>
						<th>Name</th>
						<th>Level</th>
						<th width="100px">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($petugas as $row) : ?>
					<tr>
						<td><?= $row->username ?></td>
						<td><?= $row->nama ?></td>
						<td><?= $row->level ?></td>
						<td>
							<a href="<?= site_url('petugas/edit/' . $row->id_petugas) ?>" class="btn btn-sm btn-success"> <span class="fas fa-edit"></span> </a>
							<a href="<?= site_url('petugas/delete/' . $row->id_petugas) ?>" class="btn btn-sm btn-danger"> <span class="fas fa-trash-alt"></span> </a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<th>Username</th>
						<th>Name</th>
						<th>Level</th>
						<th>Aksi</th>
					</tr>
				</tfoot>
			</table>

		</div>
	</div>

</div>

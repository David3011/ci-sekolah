<div class="container-fluid mt-4">

	<h4>Data Nilai</h4>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url("nilai") ?>">Nilai</a></li>
			<li class="breadcrumb-item active" aria-current="page">Kelas</li>
		</ol>
	</nav>

	<?php if ($this->session->flashdata('message')) : ?>
		<div class="alert alert-<?= $this->session->flashdata('theme') ?>" role="alert">
			<?= $this->session->flashdata('message'); ?>
		</div>
	<?php endif; ?>



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
							<a href="<?= site_url('nilai/nilai/' . $row->id_kelas . '/'  . $row->id_mapel) ?>" class="btn btn-sm btn-info"> <span class="fas fa-eye"></span> </a>
							
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

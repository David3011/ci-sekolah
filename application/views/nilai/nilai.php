<div class="container-fluid mt-4">

	<h4>Data Nilai</h4>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="<?= site_url("nilai/mapel/" . $this->uri->segment(3)) ?>">Kelas</a></li>
			<li class="breadcrumb-item active" aria-current="page">Nilai</li>
		</ol>
	</nav>

	<?php if ($this->session->flashdata('message')) : ?>
		<div class="alert alert-<?= $this->session->flashdata('theme') ?>" role="alert">
			<?= $this->session->flashdata('message'); ?>
		</div>
	<?php endif; ?>

	<form action="<?= site_url('nilai/save') ?>" method="post">

	<div class="row justify-content-end">
		<div class="col text-right">
			<button type="submit" class="btn btn-outline-primary end"> Simpan</button>
		</div>
	</div>

	<div class="card mt-2">
		<div class="card-header">
			Tabel Siswa
		</div>
		<div class="card-body">

			<table id="myTable" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th width="80px">No</th>
						<th>NIS</th>
						<th>Nama</th>
						<th>Tugas 1</th>
						<th>Tugas 2</th>
						<th>Tugas 3</th>
						<th>Tugas 4</th>
						<th>Tugas 5</th>
						<th>Tugas 6</th>
						<th>Tugas 7</th>
						<th>Tugas 8</th>
						<th>UTS</th>
						<th>UAS</th>

					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($nilai as $row) :
					?>
						<tr>
							<td>
								<?= $no++ ?>
								<input type="hidden" class="form-control" name="id_nilai[]" value="<?= $row->id_nilai ?? '' ?>">
							</td>
							<td>
								<?= $row->nis ?>
								<input type="hidden" class="form-control" name="nis[]" value="<?= $row->nis ?? '' ?>">
								<input type="hidden" class="form-control" name="id_mapel[]" value="<?= $row->id_mapel ?? $this->uri->segment(4) ?>">
							</td>
							<td><?= $row->nama ?></td>
							<td>
								<input type="text" class="form-control" name="tugas_1[]" value="<?= $row->tugas1 ?? '0' ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="tugas_2[]" value="<?= $row->tugas2 ?? '0' ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="tugas_3[]" value="<?= $row->tugas3 ?? '0' ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="tugas_4[]" value="<?= $row->tugas4 ?? '0' ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="tugas_5[]" value="<?= $row->tugas5 ?? '0' ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="tugas_6[]" value="<?= $row->tugas6 ?? '0' ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="tugas_7[]" value="<?= $row->tugas7 ?? '0' ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="tugas_8[]" value="<?= $row->tugas8 ?? '0' ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="uts[]" value="<?= $row->uts ?? '0' ?>">
							</td>
							<td>
								<input type="text" class="form-control" name="uas[]" value="<?= $row->uas ?? '0' ?>">
							</td>


						</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<th width="80px">No</th>
						<th>NIS</th>
						<th>Nama</th>
						<th>Tugas 1</th>
						<th>Tugas 2</th>
						<th>Tugas 3</th>
						<th>Tugas 4</th>
						<th>Tugas 5</th>
						<th>Tugas 6</th>
						<th>Tugas 7</th>
						<th>Tugas 8</th>
						<th>UTS</th>
						<th>UAS</th>
					</tr>
				</tfoot>
			</table>

		</div>
	</div>

	</form>

</div>

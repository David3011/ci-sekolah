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
							<input type="hidden" class="form-control" id="id_nilai[]" name="id_nilai[]" value="<?= $row->id_nilai ?>">
						</td>
						<td><?= $row->nis ?></td>
						<td><?= $row->nama ?></td>
						<td>
							<input type="text" class="form-control" id="tugas_1[]" name="tugas_1[]" value="<?= $row->tugas1 ?>">
						</td>
						<td>
							<input type="text" class="form-control" id="tugas_2[]" name="tugas_2[]" value="<?= $row->tugas2 ?>">
						</td>
						<td>
							<input type="text" class="form-control" id="tugas_3[]" name="tugas_3[]" value="<?= $row->tugas3 ?>">
						</td>
						<td>
							<input type="text" class="form-control" id="tugas_4[]" name="tugas_4[]" value="<?= $row->tugas4 ?>">
						</td>
						<td>
							<input type="text" class="form-control" id="tugas_5[]" name="tugas_5[]" value="<?= $row->tugas5 ?>">
						</td>
						<td>
							<input type="text" class="form-control" id="tugas_6[]" name="tugas_6[]" value="<?= $row->tugas6 ?>">
						</td>
						<td>
							<input type="text" class="form-control" id="tugas_7[]" name="tugas_7[]" value="<?= $row->tugas7 ?>">
						</td>
						<td>
							<input type="text" class="form-control" id="tugas_8[]" name="tugas_8[]" value="<?= $row->tugas8 ?>">
						</td>
						<td>
							<input type="text" class="form-control" id="uts[]" name="uts[]" value="<?= $row->uts ?>">
						</td>
						<td>
							<input type="text" class="form-control" id="uas[]" name="uas[]" value="<?= $row->uas ?>">
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

</div>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?= base_url("assets/bootstrap/css/bootstrap.min.css") ?>">

		<!-- Font Awesome -->
		<link href="<?= base_url("assets/font-awesome/css/all.css") ?>" rel="stylesheet"> <!--load all styles -->

		<!-- DataTables -->
		<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">


		<title><?= $title ?: '' . 'SI Sekolah'?></title>
	</head>
	<body class="pt-5">


		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="javascript:void(0)">SI Sekolah</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item <?= ($this->uri->segment(1) == 'dashboard') ? 'active' : '' ; ?>">
							<a class="nav-link" href="<?= site_url("dashboard") ?>">Home</a>
						</li>
						<li class="nav-item <?= ($this->uri->segment(1) == 'petugas') ? 'active' : '' ; ?>">
							<a class="nav-link" href="<?= site_url("petugas") ?>">Petugas</a>
						</li>
						<li class="nav-item <?= ($this->uri->segment(1) == 'guru') ? 'active' : '' ; ?>">
							<a class="nav-link" href="<?= site_url("guru") ?>">Guru</a>
						</li>
						<li class="nav-item <?= ($this->uri->segment(1) == 'siswa') ? 'active' : '' ; ?>">
							<a class="nav-link" href="<?= site_url("siswa") ?>">Siswa</a>
						</li>
						<li class="nav-item <?= ($this->uri->segment(1) == 'kelas') ? 'active' : '' ; ?>">
							<a class="nav-link" href="<?= site_url("kelas") ?>">Kelas</a>
						</li>
						<li class="nav-item <?= ($this->uri->segment(1) == 'mapel') ? 'active' : '' ; ?>">
							<a class="nav-link" href="<?= site_url("mapel") ?>">Mapel</a>
						</li>
						<li class="nav-item <?= ($this->uri->segment(1) == 'jadwal') ? 'active' : '' ; ?>">
							<a class="nav-link" href="<?= site_url("jadwal") ?>">Jadwal</a>
						</li>
						<li class="nav-item <?= ($this->uri->segment(1) == 'nilai') ? 'active' : '' ; ?>">
							<a class="nav-link" href="<?= site_url("nilai") ?>">Nilai</a>
						</li>
					</ul>

					<ul class="navbar-nav right text-right">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="fas fa-cogs"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Ubah Password</a>
								<a class="dropdown-item" href="<?= site_url('auth/logout') ?>">Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div style="min-height: 75vh;">


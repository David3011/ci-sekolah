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

		<title><?= $title ?: '' . 'SI Sekolah'?></title>
	</head>
	<body>


		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">SI Sekolah</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Petugas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Guru</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Siswa</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Kelas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Mapel</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Jadwal</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Nilai</a>
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


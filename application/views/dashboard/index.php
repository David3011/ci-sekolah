<div class="container-fluid mt-4">

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active" aria-current="page">Home</li>
		</ol>
	</nav>

	<div class="jumbotron">
		<h1 class="display-4">Selamat Datang!</h1>
	<p class="lead">Hai <?= $this->session->userdata('nama') ?> dengan level <?= $this->session->userdata('level'); ?>.</p>
</div>

</div>

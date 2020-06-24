<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url("assets/bootstrap/css/bootstrap.min.css") ?>">

	<title>Login - SI Sekolah</title>

	<style>
		/* Set a background image by replacing the URL below */
		body {
			background: url('https://source.unsplash.com/twukN12EN7c/1920x1080') no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			background-size: cover;
			-o-background-size: cover;
		}
	</style>
</head>

<body>


	<div class="container">
		<div class="row">
			<div class="col-md-4 mx-auto" style="margin-top: 20vh">
				<div class="card">
					<div class="card-body">
						<h3 class=" text-center">Login</h3>

						<form action="<?= site_url("auth/check"); ?>" method="post">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="username" class="form-control" id="username" name="username">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password">
							</div>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="rememberMe">
								<label class="form-check-label" for="rememberMe">Remember me</label>
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
						</form>

					</div>
				</div>

			</div>
		</div>

	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="<?= base_url("assets/bootstrap/js/bootstrap.min.js") ?>"></script>
</body>

</html>

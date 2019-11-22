<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap4/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/customcss/login.css') ?>">
</head>
<body>
	<form class="form-signin" method="POST">
		<div class="text-center">
			<a href="index.php"><img class="mb-4" src="<?php echo base_url('assets/image/logo.png') ?>"alt="logo integra" width="autofocus"></a>
			<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
		</div>
		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="text" name="username" class="form-control" placeholder="Email address" required="" autofocus="">
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" name="password" class="form-control" placeholder="Password" required="">
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Tetap Masuk
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="masuk">Masuk</button>
		<p class="mt-5 mb-3 text-muted">@Integra Inovasi Indonesia</p>
	</form>
	

</body>
</html>
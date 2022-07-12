<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if ($key === hash('sha256', $row['username'])) {
		$_SESSION['login'] = true;
	}
}

if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}


if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

	// cek username
	if (mysqli_num_rows($result) === 1) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if (isset($_POST['remember'])) {
				// buat cookie
				setcookie('id', $row['id'], time() + 60);
				setcookie('key', hash('sha256', $row['username']), time() + 60);
			}

			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}

?>

<!DOCTYPE html>
<html>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Halaman Login</title>
</head>

<body class="bg-primary">
	<div class="container">
		<div class="row vh-100 align-items-center justify-content-center">
			<div class="col-sm-8 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
				<div class="row justify-content-center mb-4">
					<img src="img/bct.png" class="w-25">
				</div>
				<form action="" method="post">
					<ul>
						<div class="mb-4">
							<label for="username">Username :</label>
							<input type="text" name="username" id="username">
						</div>

						<div class="mb-4">
							<label for="password">Password :</label>
							<input type="password" name="password" id="password">
						</div>

						<div class="mb-4 form-check">
							<input type="checkbox" name="remember" id="remember">
							<label for="remember">Remember me</label>
						</div>
						<button type="submit" class="btn btn-success w-100 mb-4" name="login">Login</button>
						<a href="home.php" class="mb-4 row justify-content-center" name="backtohome">Back to Home</a>

					</ul>



				</form>
			</div>

		</div>

	</div>

	<?php if (isset($error)) : ?>
		<p style="color: red; font-style: italic;">username / password salah</p>
	<?php endif; ?>

	<form action="" method="post">



	</form>







</body>

</html>
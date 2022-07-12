<?php
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
$supplier = query("SELECT * FROM supplier");

// tombol cari ditekan
if (isset($_POST["searchsup"])) {
	$supplier = searchsup($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Halaman Admin</title>
	<style>
		.loader {
			width: 100px;
			position: absolute;
			top: 118px;
			left: 210px;
			z-index: -1;
			display: none;
		}

		@media print {

			.logout,
			.tambah,
			.form-cari,
			.aksi {
				display: none;
			}
		}
	</style>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/script.js"></script>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>

<body>

	<!-- start navbar -->
	<nav class="navbar navbar-light fixed-top" style="background-color: #0d6efd;">
		<div class=" container">
			<a class="navbar-brand" href="#">
				<img src="img/bctlogo1.png">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #0d6efd;">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbarLabel">BCT COMPANY</h5>
					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<!-- <ul class="navbar-nav justify-content-end flex-grow-1 pe-3"> -->
					<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Products
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="stock.php">Display Data</a></li>
								<li><a class="dropdown-item" href="tambah.php">Add Data</a></li>
								<li><a class="dropdown-item" href="stock-copy.php">Update & Delete Data</a></li>

							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Suppliers
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="supplier.php">Display Suppliers</a></li>
								<li><a class="dropdown-item" href="supplier-add.php">Add Suppliers</a></li>
								<li><a class="dropdown-item" href="supplier-copy.php">Update & Delete Suppliers</a></li>
							</ul>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Account
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="logout.php">Logout</a></li>
								<li><a class="dropdown-item" href="registrasi.php">Create New Admin</a></li>
							</ul>
						</li>
					</ul>
					</li>
					</ul>

				</div>
			</div>
		</div>
	</nav>
	<!-- end navbar -->



	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


	<!-- <a href="cetak.php" target="_blank">Cetak</a> -->

	<div class="container mt-5">
		<br>
		<br>
		<h1>Daftar supplier</h1>

		<!-- <a href="tambah.php" class="tambah">Tambah data supplier</a> -->

		<br>
		<form action="" method="post" class="form-cari">

			<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
			<button type="submit" name="cari" id="tombol-cari">Cari!</button>

			<img src="img/loader.gif" class="loader">

		</form>
		<br>
		<!-- <a href="cetak.php" target="_blank">Cetak</a> -->
		<div id="container" class="container mt-5">
			<table class="table table-striped table-responsive text-center mt-4" style="width:100%">
				<thead class="table-dark">
					<tr>
						<th>No.</th>
						<th class="aksi">Action</th>

						<th>Supplier Name</th>
						<th>Email</th>
						<th>Address</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($supplier as $row) : ?>
						<tr>
							<td><?= $i; ?></td>
							<td class="aksi">
								<a href="supplier-update.php?id=<?= $row["id"]; ?>">Update</a> |
								<a href="supplier-delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Are You Sure?');">Delete</a>
							</td>

							<td><?= $row["sup_name"]; ?></td>
							<td><?= $row["email"]; ?></td>
							<td><?= $row["address"]; ?></td>

						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>


</body>

</html>
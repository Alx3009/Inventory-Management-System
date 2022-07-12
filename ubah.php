<?php
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

	// cek apakah data berhasil diubah atau tidak
	if (ubah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'stock-copy.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'stock-copy.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Update Product</title>
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<div class="container mt-5">
		<br>
		<br>
		<h1>Update Product</h1>
		<br>

		<form action="" method="post" enctype="multipart/form-data" class="row g-3">
			<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
			<input type="hidden" name="oldpicture" value="<?= $mhs["picture"]; ?>">
			<div class="col-md-6">
				<label for="quantity">Quantity : </label>
				<input type="text" name="quantity" class="form-control" id="quantity" required value="<?= $mhs["quantity"]; ?>">
			</div>
			<div class="col-md-6">
				<label for="name">Product Name : </label>
				<input type="text" name="name" class="form-control" id="name" value="<?= $mhs["name"]; ?>">
			</div>
			<div class="col-md-6">
				<label for="supplier">Supplier :</label>
				<input type="text" name="supplier" class="form-control" id="supplier" value="<?= $mhs["supplier"]; ?>">
			</div>
			<div class="col-md-6">
				<label for="price">Price :</label>
				<input type="text" name="price" class="form-control" id="price" value="<?= $mhs["price"]; ?>">
			</div>
			<div class="col-md-6">
				<label for="picture">Picture :</label> <br>
				<img src="img/<?= $mhs['picture']; ?>" width="40"> <br>
				<input type="file" class="form-control" name="picture" id="picture">
			</div>
			<div class="col-md-12">
				<button type="submit" name="submit" class="btn btn-primary">Update Data!</button>
			</div>

		</form>
	</div>



</body>

</html>
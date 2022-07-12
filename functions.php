<?php

// koneksi ke database
$conn = mysqli_connect("127.0.0.1", "root", "", "phpdasar");


function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data)
{
	global $conn;

	$quantity = htmlspecialchars($data["quantity"]);
	$name = htmlspecialchars($data["name"]);
	$supplier = htmlspecialchars($data["supplier"]);
	$price = htmlspecialchars($data["price"]);

	// upload gambar
	$picture = upload();
	if (!$picture) {
		return false;
	}

	$query = "INSERT INTO mahasiswa
				VALUES
			  ('', '$quantity', '$name', '$supplier', '$price', '$picture')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function upload()
{

	$namaFile = $_FILES['picture']['name'];
	$ukuranFile = $_FILES['picture']['size'];
	$error = $_FILES['picture']['error'];
	$tmpName = $_FILES['picture']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if ($error === 4) {
		echo "<script>
				alert('Please upload the picture first!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('Picture format is not supported!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if ($ukuranFile > 1000000) {
		echo "<script>
				alert('Too big!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate name$name gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
}




function hapus($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data)
{
	global $conn;

	$id = $data["id"];
	$quantity = htmlspecialchars($data["quantity"]);
	$name = htmlspecialchars($data["name"]);
	$supplier = htmlspecialchars($data["supplier"]);
	$price = htmlspecialchars($data["price"]);
	$oldpicture = htmlspecialchars($data["oldpicture"]);

	// cek apakah user pilih gambar baru atau tidak
	if ($_FILES['picture']['error'] === 4) {
		$picture = $oldpicture;
	} else {
		$picture = upload();
	}


	$query = "UPDATE mahasiswa SET
				quantity = '$quantity',
				name = '$name',
				supplier = '$supplier',
				price = '$price',
				picture = '$picture'
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function cari($keyword)
{
	$query = "SELECT * FROM mahasiswa
				WHERE
			  name LIKE '%$keyword%' OR
			  quantity LIKE '%$keyword%' OR
			  supplier LIKE '%$keyword%' OR
			  price LIKE '%$keyword%'
			";
	return query($query);
}


function registrasi($data)
{
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}


	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);
}

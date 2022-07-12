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
$sup = query("SELECT * FROM supplier WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (suppup($_POST) > 0) {
        echo "
			<script>
				alert('Supplier Updated!');
				document.location.href = 'supplier-copy.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Supplier update failed!');
				document.location.href = 'supplier-copy.php';
			</script>
		";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Update Supplier</title>
</head>

<body>
    <h1>Update Supplier</h1>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $sup["id"]; ?>">
        <ul>
            <li>
                <label for="sup_name">Supplier Name : </label>
                <input type="text" name="sup_name" id="sup_name" required value="<?= $sup["sup_name"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" value="<?= $sup["email"]; ?>">
            </li>
            <li>
                <label for="address">Address :</label>
                <input type="text" name="address" id="address" value="<?= $sup["address"]; ?>">
            </li>

            <li>
                <button type="submit" name="submit">Update Data!</button>
            </li>
        </ul>

    </form>




</body>

</html>
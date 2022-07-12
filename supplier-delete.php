<?php
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

$id = $_GET["id"];

if (suppdel($id) > 0) {
	echo "
		<script>
			alert('Supplier Deleted!');
			document.location.href = 'supplier-copy.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Failed!');
			document.location.href = 'supplier-copy.php';
		</script>
	";
}
